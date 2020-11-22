export const PI = Math.PI;

export let usuario = "jon"

let password = "qwerty"//exportar por default la variable o constante
// export default password

const hello=()=>console.log("HOLA")

//una sola vez que existe el dafult no debe tener dos
/*
export default function saludar(){
    console.log("EXPORTAR DEFAULT ECMASCRIPT")
}
*/
export function saludar(){
    console.log("EXPORTAR DEFAULT ECMASCRIPT")
}

//una clase por defecto
export default class Saludar{
    constructor(){
        console.log("HOLA Modulo Clases-ES6")
    }
}