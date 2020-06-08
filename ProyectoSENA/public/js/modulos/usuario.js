const RUTA_URL = "http://localhost/ProyectoSENA/UsuariosC/";
var listarUsuarios = function () {
  var tabla = $("#tablaUsuarios").DataTable({
      
    ajax: {
      url: RUTA_URL + "llenarTablaUsuario",
      dataSrc: "",
      
    },
    columns: [
     
      {
        data: "id",
      },
      {
        data: "identificacion",
      },
      {
        data: "nombre_usuario",
      },
      {
        data: "apellido_usuario",
      },
      {
        data: "telefono",
      },
      {
        data: "direccion",
      },
      {
        data: "correo",
      },
      {
        data: "pass",
      },
      {
        data: "rol",
      },
      
      {
        defaultContent:
          "<button type='button' class ='editar btn btn-secundary' data-toggle='tooltip' data-placement='top' title='Edita un Usuario'> <i class='icon-edit'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-secondary' data-toggle='tooltip' data-placement='top' title='Elimina un Usuario'> <i class='icon-trash'></i></button>",
      },
    ],
    columnDefs: [
      {
        width: "5%",
        targets: 0,
      },
      {
        width: "5%",
        targets: 1,
      },
      {
        width: "5%",
        targets: 2,
      },
      {
        width: "5%",
        targets: 3,
      },
      {
        width: "5%",
        targets: 4,
      },
      {
        width: "5%",
        targets: 5,
      },
      {
        width: "5%",
        targets: 6,
      },
      
      
    ],
  });
  editar("#tablaUsuarios tbody", tabla);
  eliminar("#tablaUsuarios tbody", tabla); 
};

var nuevo = function () {
  $("#nuevo").on("click", function () {
    mostrarForm(true);
  });
};

var editar = function (tbody, table) 
{
  $(tbody).on("click", "button.editar", function () 
  {
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true);
    var idusuario = $("#id").val(dato.id);
    var identiusuario = $("#identificacion").val(dato.identificacion);
    var nombre = $("#nombre").val(dato.nombre_usuario);
    var apellido = $("#apellido").val(dato.apellido_usuario);
    var teleusuario = $("#telefono").val(dato.telefono);
    var direusuario = $("#direccion").val(dato.direccion);
    var correousuario = $("#correo").val(dato.correo);
    var passusuario = $("#pass").val(dato.pass);
    var rolusuario = $("#rol").val(dato.rol);
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    $.ajax({
      method: "POST",
      url: RUTA_URL + "crearUsuario",
      data: datos,
      processData: false,
      contentType: false,
    })
      
      .done(function (data) {
        alert("Accion Realizada con exito !");
        mostrarForm(false);
        $("#tablaUsuarios").DataTable().ajax.reload();
      })
      .fail(function (data) {
        alert("operacion fallida !");
        mostrarForm(false);
      });
  });
};

var limpiar = function () {
  $("#id").val("");
  $("#identificacion").val("");
  $("#nombre").val("");
  $("#apellido").val("");
  $("#telefono").val("");
  $("#direccion").val("");
  $("#correo").val("");
  $("#pass").val("");
  $("#rol").val("");
};

var cancelar = function () {
  $("#cancelar").on("click", function () {
    limpiar();
    mostrarForm(false);
    $("#tablaUsuarios").DataTable().ajax.reload();
  });
};

var mostrarForm = function (estado) {
  if (estado) {
    $("#formulario").show();
    $("#vistatabla").hide();
  } else {
    $("#formulario").hide();
    $("#vistatabla").show();
  }
};

var eliminar = function (tbody, table) {
  $(tbody).on("click", "button.eliminar", function () {
    var dato = table.row($(this).parents("tr")).data();
    var respuesta = confirm(
      "Seguro que desea eliminar ? : " +
        dato.id +
        " " +
        dato.nombre_usuario +
        " " +
        dato.apellido_usuario
    );
    if (respuesta) {
      $.ajax({
        method: "POST",
        url: RUTA_URL + "eliminarusuario",
        data: { id: dato.id },
      })
        .done(function (data) {
          alert("Accion Realizada con exito !");
          $("#tablaUsuarios").DataTable().ajax.reload();
        })
        .fail(function (data) {
          alert("operacion fallida !");
        });
    } else {
      alert("Operacion cancelada por el usuario.");
    }
  });
};

$(document).ready(function () {
  listarUsuarios();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  limpiar();
  mostrarForm(false);
});
