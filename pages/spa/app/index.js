import { App } from "./App.js";
import PWAs from "./components/head.js"
document.addEventListener("DOMContentLoaded", App)
window.addEventListener("hashchange", App)
PWAs()
if('serviceWorker'in navigator){
    navigator.serviceWorker.register('app/components/sw.js')
    .then((reg)=>console.log(`Registro de SW exitoso ${reg}`))
    .catch((err)=>{
    let message = err.statusText || "Ocurrió un error";
    console.warn(`ERROR ${err}: ${message}`)
    })
}