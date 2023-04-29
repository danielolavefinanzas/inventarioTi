$(document).ready(function () {
    // Setup - add a text input to each footer cell
    $('#dataTable thead tr')
        .addClass('filters')
        .appendTo('#dataTable thead');
 
    $('#dataTable').DataTable({
        columnDefs: [{
            targets: undefined,
            searchBuilder: {
                defaultCondition: '!='
            }
        }],
            language: {
                url: 'https://raw.githubusercontent.com/DataTables/Plugins/master/i18n/es-ES.json',
                "search": "Filtrar por: Serie / OC / Guía",
            },
            responsive: "true",
            dom: 'Bfrtilp',
            buttons:[
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"></i>',
                    titleAttr: 'Exportar a Excel',
                    className: 'btn btn-success',
                    filename: 'registro_inventario',
                    autoFilter: true,
                    exportOptions: {
                        columns: [ 1,2,3]
                    }
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i>',
                    titleAttr: 'Exportar a PDF',
                    className: 'btn btn-danger',
                    filename: 'registro_series',
                    orientation:'landscape',
                    exportOptions: {
                        columns: [ 1,2,3]
                    },
                    pageSize: 'A4',

                },
                {
                    extend: 'print',
                    text: '<i class="fa fa-print"></i>',
                    titleAttr: 'Imprimir',
                    className: 'btn btn-primary',
                    exportOptions: {
                        columns: [ 1,2,3]
                    }
                }
            ],
                    
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function () {
            this.api().columns([1,2,3,4]).every(function(i){
                var column = this,
                select = $('<select class="form-select  form-select-sm" style="width:200px; "><option value="">Seleccione:</option></select>')
                .appendTo( $('#search'+i))
                .on( 'change', function(){
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());
                  column.search( val ? '^'+val+'$' : '', true, false ).draw();
                });
                column.data().unique().sort().each( function ( d, j ) {
                 select.append('<option value="'+d+'">'+d+'</option>');
                });
               });
                
        },
    });
    
});
