// import saludar from "./constantes.js"
/* import {sumar,restar} from "./aritmetica.js" */
// import {PI,usuario} from "./constantes.js"
import {aritmetica} from "./aritmetica.js"
console.log("Archivos módulo js")
console.log(PI)
console.log(PI,usuario)
// console.log(sumar(4,3),restar(6,3))
console.log(aritmetica.sumar(4,3),aritmetica.restar(4,3))
import Saludar,{saludar,PI,usuario} from "./constantes.js"
saludar()
let saludo = new Saludar()
saludo
//Generar ALIAS
import {aritmetica as calculos} from "./aritmetica.js"
console.log(calculos.sumar(5,2))
console.log(calculos.restar(5,2))