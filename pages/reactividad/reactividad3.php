<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reactividad del Estado</title>
</head>
<body>
    <h1>Reactividad del Estado</h1>
    <form id="todo-form">
        <input type="text" name="todo-item" id="todo-item" placeholder="Tarea por hacer">
        <input type="submit" value="Agregar">
    </form>
    <h2>Lista de Tareas</h2>
    <ul id="todo-list"></ul>
    <script>
        const d=document;
        //El State: Es importante considerar toda la posible variable para este ESTADO
        const state = {
            todoList:[],
            nombre:""
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
        //Actualizar el render de forma reactiva
        const setState=obj=>{
            for(let key in obj){
                if(state.hasOwnProperty(key)){
                    state[key]=obj[key];
                }
            }
            render();
        }
        d.addEventListener('DOMContentLoaded',render);
        //Estableciendo valores por defecto al State
        setState({
            todoList:['Tarea 1','Tarea 2','Tarea 3'],
            nombre:'Diossmer'
        })
        /*<p>lo que no se puede hacer
        Estado Mutable, Porque permite modificar el estado directamente 
        creando una copia del objeto y agregando otro elemento*/
        const items = state.todoList;
        items.push('Tarea 4');
        console.log('Estado Mutable',state)
        //lo que no se puede hacer</p>
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