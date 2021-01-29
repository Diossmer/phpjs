<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado Inmutable</title>
</head>
<body>
    <h1>Estado Inmutable</h1>
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
        //Obtenemos una copia inmutable del State
        const getState=()=>JSON.parse(JSON.stringify(state));
        d.addEventListener('DOMContentLoaded',render);
        //Estableciendo valores por defecto al State
        setState({
            todoList:['Tarea 1','Tarea 2','Tarea 3'],
            nombre:'Diossmer'
        })
        //Estado Inmutable
        const items = getState();
        items.todoList.push('Tarea 4')
        console.log('Estado Inmutable',state)
        d.addEventListener('submit',(e)=>{
            if(!e.target.matches('#todo-form'))return false;
            e.preventDefault();
            const $item = d.getElementById('todo-item');
            if(!$item)return;
            //Actualizar el State de forma reactiva
            const lastState = getState();
            lastState.todoList.push($item.value);
            setState({todoList:lastState.todoList});
            //limpiar el input
            $item.value="";
            $item.focus();
        })
    </script>
</body>
</html>