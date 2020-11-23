$(document).ready(function() {
  miDataTable();
} );

function miDataTable() {
    $('#miTabla').DataTable({
      "language": {
        "emptyTable":	"<i>No existen registros disponibles.</i>",
        "info": "Del _START_ al _END_ de _TOTAL_ ",
        "infoEmpty": "Mostrando 0 de 0 ",
        "infoFiltered": " filtros de un total de _MAX_ ",
        "infoPostFix": " registros.",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "",
        "searchPlaceholder": "Realizar busqueda",
        "zeroRecords": "No se han encontrado coincidencias.",
        "paginate": {
          "first": "Primera",
          "last": "Última",
          "next": "Siguiente",
          "previous": "Anterior"
      },
      "aria": {
        "sortAscending": "Ordenación ascendente",
        "sortDescending":	"Ordenación descendente"
      }
    },

    "lengthMenu":		[[10, 20, 25, 50, -1], [10, 20, 25, 50, "Todos"]],
    "iDisplayLength":	10,

    });
}
