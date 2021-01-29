const $divEventos = document.querySelectorAll(".evento-flujo div"),
$linkEventos = document.querySelector(".evento-flujo a")
function flujoEventos(e){
    console.log(`Hola te saluda ${this.className}, el click lo originó ${e.target.className}`)
    e.stopPropagation();
}
$divEventos.forEach(div=>{
    div.addEventListener("click",flujoEventos)
})
$linkEventos.addEventListener("click",(e)=>{
    alert("Hola soy tu amigo y docente digital. Jonathan Mircha")
    e.preventDefault() //detiene la accion del elemento
    e.stopPropagation()//detener el flujo
})