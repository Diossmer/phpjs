<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Usuario (UI) basada en el Estado</title>
</head>
<body>
    <h1>Interfaz de Usuario (UI) basada en el Estado</h1>
    <form id="todo-form">
        <input type="text" name="todo-item" id="todo-item" placeholder="Tarea por hacer">
        <input type="submit" value="Agregar">
    </form>
    <h2>Lista de Tareas</h2>
    <ul id="todo-list"></ul>
    <script>
        const d=document;
        //El State
        const state = {
            todoList:[]
        }
        //Template UI
        const template=()=>{
            if(state.todoList.length<1){
                return`<p><em>Lista sin tareas por hacer</em></p>`
            }
            let todos=state.todoList.map(item=>`<li>${item}</li>`).join('');
            return todos;
        }
        //Renser UI
        const render=()=>{
            console.log(state);
            const $list = d.getElementById('todo-list');
            if(!$list)return;
            $list.innerHTML=template();
        }
        d.addEventListener('DOMContentLoaded',render);
        d.addEventListener('submit',(e)=>{
            if(!e.target.matches('#todo-form'))return false;
            e.preventDefault();
            const $item = d.getElementById('todo-item');
            if(!$item)return;
            //Actualizar el State y la UI
            state.todoList.push($item.value);
            render();
            //limpiar el input
            $item.value="";
            $item.focus();
        })
    </script>
</body>
</html>