const $divEventos = document.querySelectorAll(".evento-flujo div")
function flujoEventos(e){
    console.log(`Hola te saluda ${this.className}, el click lo originó ${e.target.className}`)
}
console.log($divEventos)
$divEventos.forEach(div=>{
    /*
    *fase de burbuja
    div.addEventListener("click",flujoEventos)
    div.addEventListener("click",flujoEventos,false)
    *fase de captura
    div.addEventListener("click",flujoEventos,true)
    */
    div.addEventListener("click",flujoEventos,{
        capture:false,//true
        once:true,//se ejecuta 1 sola vez
    })
})