$(document).ready(function() {
    var usuario = $('#userTable').DataTable( {
        columnDefs:[{
            targets:-1,
            data:null,
            defaultContent:`
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group">
                    <input class="btn btn-primary btn-sm editar" type="button" value="Editar">
                    <button class="btn btn-danger btn-sm borrar">Eliminar</button>
                </div>
            </div>
            `
        }],
        language: {
            url: './public/data/es_es.json'
        },
        "ajax": './public/data/user.json',//"ajax": './public/data/user.json', || ../datatable/controller/UsuarioController.php
        "method":"POST",
        "contentType":"application/json; charset=utf-8",
        "columns": [
            { "data": "name" },
            { "data": "position" },
            { "data": "office" },
            { "data": "extn" },
            { "data": "start_date" },
            { "data": "salary" },
            { "data": "" },
        ],
    });







    
    //Nuevo usuario MODAL
    $("#agregar").click(function () { 
        $(".add-new-user").trigger("reset");
        $(".modal-header, .modal-content").css("background-color","rgb(200, 200, 200)");
        $(".modal-header").css("color","#0f0");
        $("#title").text("Nuevo Usuario");
        $("#submit").text("Guardar");
        $("#modals-slide-in").modal("show");
    });

    //FORMULARIO SUBMIT
    var counter = 57;
    $(".add-new-user").submit(function(e){
        e.preventDefault();
        // id = $.trim($("#id").val());
        $name = $.trim($("#name").val());
        $position = $.trim($("#position").val());
        $salary = $.trim($("#salary").val());
        $start_date = $.trim($("#start_date").val());
        $office = $.trim($("#office").val());
        $extn = $.trim($("#extn").val());

        /* console.log(
        usuario.row
        .add([counter,$name,$position,$salary,$start_date,$office,$extn])
        .draw().node()
        ); */

        console.log(
        usuario.row
        .add({counter,$name,$position,$salary,$start_date,$office,$extn})
        .draw().node()
        );

        /* usuario.row
        .add({
            "id" : counter,
            "name" : $name,
            "position" : $position,
            "salary" : $salary,
            "start_date" : $start_date,
            "office" : $office,
            "extn" : $extn})
        .draw(); */

        $.ajax({
            url: "./public/data/user.json",
            type: "POST",
            dataType: "json",
            contentType:"application/json; charset=utf-8",
            data:{
                id: counter,
                name: $name,
                position: $position,
                salary: $salary,
                start_date: $start_date,
                office: $office,
                extn: $extn},
            success:(res)=>{
                console.log(res.data);
            }
        });
        counter++;
        $("#modals-slide-in").modal("hide");
    });















   /*  $('#addRow').on( 'click', function () {
        usuario.row.add( [
            counter +'.1',
            counter +'.2',
            counter +'.3',
            counter +'.4',
            counter +'.5'
        ] ).draw( false );
 
        counter++;
    } );
    // Automatically add a first row of data
    $('#addRow').click(); */
});