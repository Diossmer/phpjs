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
        "type":"GET",
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
        opcion = 1; //alta/listar/index
    });

    //FORMULARIO SUBMIT ADD
    // var counter = 58;
    $("#form").submit(function(e){
        e.preventDefault();      
        // let id = counter,
        name = $.trim($("#name").val()),
        position = $.trim($("#position").val()),
        salary = $.trim($("#salary").val()),
        start_date = $.trim($("#start_date").val()),
        office = $.trim($("#office").val()),
        extn = $.trim($("#extn").val());
        table.row.add({name,position,salary,start_date,office,extn}).draw();//id,
        $.ajax({
            url: "./public/data/user.json",
            type: "POST",
            dataType: "json",
            contentType:"application/json; charset=utf-8",
            data: {
                name,position,salary,start_date,office,extn//id,
            },
            success:(res)=>{
                console.log(res);
            }
        })
        // counter++;
    $("#modals-slide-in").modal("hide");
    });
    
    var fila; //capturar la fila para editar o borrar el registro

    //BOTON DE EDITAR
    $(document).on('click','.editar',function(e){
        e.preventDefault();
        fila = $(this).closest("tr");
        // id = parseInt(fila.find('td:eq(0)').text());
        nombre = fila.find('td:eq(0)').text();
        posición = fila.find('td:eq(1)').text();
        consultorio = fila.find('td:eq(2)').text();
        extención = fila.find('td:eq(3)').text(); 
        fecha = fila.find('td:eq(4)').text(); 
        salario = fila.find('td:eq(5)').text(); 
        
        nombre = $("#name").val(nombre);
        posicion = $("#position").val(posición);
        consultorio = $("#office").val(consultorio);
        extención = $("#extn").val(extención);
        fecha = $("#start_date").val(fecha);
        salario = $("#salary").val(salario);
        opcion = 2; // editar
        $(".modal-header, .modal-content").css("background-color","rgb(100, 100, 200)");
        $(".modal-header").css("color","#0f0");
        $("#title").text("Editar Usuario");
        $("#submit").text("Actualizar");
        $("#modals-slide-in").modal("show");
        $("#cancel").modal("hide")
        $("#form").submit(function(e){
            table.row(fila).data({opcion,nombre,posicion,consultorio,extención,fecha,salario}).draw();
        });
    });

    //BOTON DE BORRAR
    $(document).on('click','.borrar',function(e){
        e.preventDefault();
        fila = $(this).closest("tr");
        nombre = fila.find('td:eq(0)').text();
        opcion = 3;//borrar
        let $confirm = confirm("¿Estas seguro de eliminar? "+nombre)
        if($confirm){
            $.ajax({
                url:"./public/data/user.json",
                type:"POST",
                dataType:"json",
                data:{
                    nombre:nombre,
                },
                success: function (res) {
                    table.row(fila).remove().draw();
                }
            })
        }
    });
});
