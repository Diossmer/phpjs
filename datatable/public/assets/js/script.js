$(document).ready(function() {
    funcion='listar';
    var counter = 1;
    var t = $('#userTable').DataTable( {
        "ajax": './public/data/user.json',//"ajax": './public/data/user.json', || ../datatable/controller/UsuarioController.php
        "method":"POST",
        "data":{function:funcion},
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" }
        ],
        language: {
            url: './public/data/es_es.json'
        }
    });
    $('#addRow').on( 'click', function () {
        t.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5'
        ] ).draw( false );
 
        counter++;
    } );
    // Automatically add a first row of data
    $('#addRow').click();
});