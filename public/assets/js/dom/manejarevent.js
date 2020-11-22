function holaMundo(){
    alert("Hola Mundo")
    console.log(event);
}
const $eventoSemantico=document.getElementById("evento-semantico"),
$eventoMultiple=document.getElementById("evento-multiple");
$eventoSemantico.onclick=holaMundo;//sin parentesis -> los parentesis hace que va ejecutarse
$eventoSemantico.onclick=function(e){
    alert("Hola Mundo Manejador de Evento Semántico")
    console.log(e)
    console.log(event)
}
$eventoMultiple.addEventListener("click",holaMundo)
$eventoMultiple.addEventListener("click",(e)=>{
    alert("Hola Mundo Manejador de Evento Múltiple")
    console.log(e)
    console.log(e.type)
    console.log(event.target)
    console.log(event)
})