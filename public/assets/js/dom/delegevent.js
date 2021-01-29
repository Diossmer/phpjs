function flujoEventos(e){
    console.log(`Hola te saluda ${e.target.className}, el click lo originó ${e.target.className}`)
}
document.addEventListener("click",(e)=>{
    console.log("Click en",e.target)
    if(e.target.matches(".evento-flujo div")){
        flujoEventos(e)
    }
    if(e.target.matches(".evento-flujo a")){
        alert("Hola soy tu amigo y docente digital. Jonathan Mircha")
        e.preventDefault() //detiene la accion del elemento
    }
})