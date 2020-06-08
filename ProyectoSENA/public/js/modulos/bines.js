const RUTA_URL = "http://localhost/ProyectoSENA/BienesC/";
var listarcliente = function () {
  var tabla = $("#tablabien").DataTable({
    ajax: {
      url: RUTA_URL + "llenarTablaBien",
      dataSrc: "",
    },
    columns: [
      
      {
        data: "idbn",
      },
      {
        data: "idusuario_sena",
      },
      {
        data: "marca",
      },
      {
        data: "referencia",
      },
      {
        data: "dispositivo",
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
    ],
  });
  editar("#tablabien tbody", tabla);
  eliminar("#tablabien tbody", tabla);
};

var nuevo = function () {
  $("#nuevobien").on("click", function () {
    $("#id").prop('disabled', false);
    limpiar();
    mostrarForm(true);
  });
};

var editar = function (tbody, table) { 
  $(tbody).on("click", "button.editar", function () {
    $("#idusuario_sena").prop('disabled', true);
    var dato = table.row($(this).parents("tr")).data();
    mostrarForm(true);
    var idbien = $("#idbn").val(dato.idbn);
    var idusuariosena = $("#idusuario_sena").val(dato.idusuario_sena);
    var marca = $("#marca").val(dato.marca);
    var referencia = $("#referencia").val(dato.referencia);
    var dispositivo = $("#dispositivo").val(dato.dispositivo);
    
  });
};

var guardar = function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData($("form")[0]);
    $.ajax({
      method: "POST",
      url: RUTA_URL + "crearBien",
      data: datos,
      processData: false,
      contentType: false,
    })
      .done(function (data) {
        alert("Accion Realizada con exito !");
        mostrarForm(false);
        $("#tablabien").DataTable().ajax.reload();
      })
      .fail(function (data) {
        alert("operacion fallida !");
        mostrarForm(false);
      });
  });
};

var limpiar = function () {
  $("#idbn").val("");
  $("#idusuario_sena").val("");
  $("#marca").val("");
  $("#referencia").val("");
  $("#dispositivo").val("");
  
};

var cancelar = function () {
  $("#cancelar").on("click", function () {
    limpiar();
    mostrarForm(false);
    $("#tablabien").DataTable().ajax.reload();
  });
};

var mostrarForm = function (estado) {
  if (estado) {
    $("#formularioRegistroBien").show();
    $("#vistatablaBien").hide();
  } else {
    $("#formularioRegistroBien").hide();
    $("#vistatablaBien").show();
  }
};

var eliminar = function (tbody, table) {
  $(tbody).on("click", "button.eliminar", function () {
    var dato = table.row($(this).parents("tr")).data();
    var respuesta = confirm(
      "Seguro que desea eliminar : " +
        dato.marca +
        " " +
        dato.referencia
    );
    if (respuesta) {
      $.ajax({
        method: "POST",
        url: RUTA_URL + "eliminarBien",
        data: { id: dato.idbn },
      })
        .done(function (data) {
          alert("Accion Realizada con exito !");
          $("#mitablabien").DataTable().ajax.reload();
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
  listarcliente();
  nuevo();
  editar();
  eliminar();
  guardar();
  cancelar();
  limpiar();
  mostrarForm(false);
});
