$(document).ready(function() {
    var table = $('#userTable').DataTable( {
        columnDefs:[{
            targets:-1,
            data:null,
            dataSrc:"",
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
        "dataType":"json",
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
    var counter = 58;
    $("#form").submit(function(e){
        e.preventDefault();      
        let id = counter,
        name = $.trim($("#name").val()),
        position = $.trim($("#position").val()),
        salary = $.trim($("#salary").val()),
        start_date = $.trim($("#start_date").val()),
        office = $.trim($("#office").val()),
        extn = $.trim($("#extn").val());
        table.row.add({id,name,position,salary,start_date,office,extn}).draw();
        $.ajax({
            url: "./public/data/user.json",
            type: "POST",
            dataType: "json",
            contentType:"application/json; charset=utf-8",
            data: {
                id,name,position,salary,start_date,office,extn
            },
            success:(res)=>{
                console.log(res);
            }
        })
        counter++;
    $("#modals-slide-in").modal("hide");
    });
});