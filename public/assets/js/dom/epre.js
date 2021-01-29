const $eventoMultiple=document.getElementById("evento-multiple"),
$eventoRemover=document.getElementById("evento-remover");

function saludar(nombre="desconocid@"){
    alert(`Hola ${nombre}`)
    console.log(event)
}
$eventoMultiple.addEventListener("click",saludar)
$eventoMultiple.addEventListener("click",()=>saludar())
$eventoMultiple.addEventListener("click",()=>{
    saludar()
    saludar(["Diossmer","Jon"])
})
const removerDobleClick=(e)=>{
    alert(`Removiendo el evento de tipo ${e.type}`)
    console.log(e)
    $eventoRemover.removeEventListener("dblclick",removerDobleClick)
    $eventoRemover.disabled=true
}
$eventoRemover.addEventListener("dblclick",removerDobleClick)