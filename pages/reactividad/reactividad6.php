<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería de Componentes con Estado</title>
</head>
<body>
    <h1>Librería de Componentes con Estado</h1>
    <form id="todo-form">
        <input type="text" name="todo-item" id="todo-item" placeholder="Tarea por hacer">
        <input type="submit" value="Agregar">
    </form>
    <h2>Lista de Tareas</h2>
    <ul id="todo-list"></ul>
    <script src='../../public/assets/js/reactividad/Component.js'></script>
    <script>
        const d=document;
        const app = new Component({
            el:'#todo-list',
            data:{
                todoList:[]
            },
            template:function(props){
                if(props.todoList.length<1){
                return`<p><em>Lista sin tareas por hacer</em></p>`
            }
            let todos=props.todoList.map(item=>`<li>${item}</li>`).join('');
            return todos;
            }
        })
        d.addEventListener('DOMContentLoaded',app.render);
        //Estableciendo valores por defecto al State
        app.setState({
            todoList:['Tarea 1','Tarea 2','Tarea 3']
        })
        d.addEventListener('submit',(e)=>{
            if(!e.target.matches('#todo-form'))return false;
            e.preventDefault();
            const $item = d.getElementById('todo-item');
            if(!$item)return;
            //Actualizar el State de forma reactiva
            const lastState = app.getState();
            lastState.todoList.push($item.value);
            app.setState({todoList:lastState.todoList});
            //limpiar el input
            $item.value="";
            $item.focus();
        })
    </script>
</body>
</html>