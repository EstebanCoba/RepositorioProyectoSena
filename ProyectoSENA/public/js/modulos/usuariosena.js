const RUTA_URL = "http://localhost/ProyectoSENA/UsuarioSena/";

var listarUsuarioS = function () {
  var tabla = $("#tablasena").DataTable({
    ajax: {
      url: RUTA_URL + "llenarTablaUsuarioSena",
      dataSrc: "",
    },
    columns: [
      
      {
        data: "idusuario_sena",
      },
      {
        data: "identificacion",
      },
      {
        data: "nombre_sena",
      },
      {
        data: "apellido_sena",
      },
      {
        data: "telefono",
      },
      {
        data: "correo",
      },
      {
        data: "numero_ficha",
      },
      {
        data: "cargo",
      },
      {
        defaultContent:
          "<button type='button' class ='editar btn btn-secundary' data-toggle='tooltip' data-placement='top' title='Edita un cliente'> <i class='icon-edit'></i></button>",
      },
      {
        defaultContent:
          "<button type='button' class ='eliminar btn btn-secondary' data-toggle='tooltip' data-placement='top' title='Elimina un cliente'> <i class='icon-trash'></i></button>",
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
      {
        width: "5%",
        targets: 7,
      },
    ],
  });
  editar("#tablasena tbody", tabla);
  eliminar("#tablasena tbody", tabla);
};

var nuevo = function () {
  $("#nuevousuariosena").on("click", function () {
    limpiar();
    mostrarForm(true);
  });
};

var editar = function (tbody, table) {
  $(tbody).on("click", "button.editar", function () {
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true);
    var id = $("#idusuario_sena").val(dato.idusuario_sena)
    var dni = $("#identificacion").val(dato.identificacion);
    var nombre = $("#nombre").val(dato.nombre_sena);
    var apellido = $("#apellido").val(dato.apellido_sena);
    var correo = $("#telefono").val(dato.telefono);
    var telefono = $("#correo").val(dato.correo);
    var cargo = $("#ficha").val(dato.numero_ficha);
    var telefono = $("#cargo").val(dato.cargo);
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    $.ajax({
      method: "POST",
      url: RUTA_URL + "crearUsuarioS",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        alert("Accion Realizada con exito !");
        mostrarForm(false);
        $("#tablasena").DataTable().ajax.reload();
      })
      .fail(function (data) {
        alert("operacion fallida !");
        mostrarForm(false);
      });
  });
};

var limpiar = function () {
  $("#idusuario_sena").val("");
  $("#identificacion").val("");
  $("#nombre").val("");
  $("#apellido").val("");
  $("#telefono").val("");
  $("#correo").val("");
  $("#ficha").val("");
  $("#cargo").val("");
};

var cancelar = function () {
  $("#cancelar").on("click", function () {
    limpiar();
    mostrarForm(false);
    $("#tablasena").DataTable().ajax.reload();
  });
};

var mostrarForm = function (estado) {
  if (estado) {
    $("#formularioUsuarioSena").show();
    $("#vistatablaSena").hide();
  } else {
    $("#formularioUsuarioSena").hide();
    $("#vistatablaSena").show();
  }
};

var eliminar = function (tbody, table) {
  $(tbody).on("click", "button.eliminar", function () {
    var dato = table.row($(this).parents("tr")).data();
    var respuesta = confirm(
      "Seguro que desea eliminar : " +
        dato.idusuario_sena +
         " " +
        dato.nombre_sena +
        " " +
        dato.apellido_sena
    );
    if (respuesta) {
      $.ajax({
        method: "POST",
        url: RUTA_URL + "eliminarUsuarioS",
        data: { idusuario_sena: dato.idusuario_sena },
      })
        .done(function (data) {
          alert("Accion Realizada con exito !");
          $("#tablasena").DataTable().ajax.reload();

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
  listarUsuarioS();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  limpiar();
  mostrarForm(false);
});
