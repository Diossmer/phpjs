/* 9) Programa una función que obtenga un numero aleatorio entre 501 y 600. */
export function azar(min,max){
    (Number(min) && Number(max))?
    console.log(Math.round(Math.random()*(max-min))+min)
    :console.error(false)
}
/* 10) Programa una función que reciba un número y evalúe si es capicúa o no
(que se lee igual en un sentido que en otro), pe. miFuncion(2002) devolverá true.
 */
export function capicua(h){
    if(/[a-zA-Z]/g.test(h)){
        console.warn("coloque una frase o palabra capícua (polindromo)")
    }else{
        let f=Number(h.toString().split('').reverse().join(''))
        if(h === f){
            console.info(`Capicúa -> ${h}`)
        }else if(f !== h){
            console.error("No existe ninguna combinación en lo números")
        }
    }
}
/* 11) Programa una función que calcule el factorial de un número
(El factorial de un entero positivo n, se define como el producto
de todos los números enteros positivos desde 1 hasta n), pe. miFuncion(5) devolverá 120. */
export const factorial=(a=undefined)=>{
    if(a===undefined)return console.warn("No ingresaste un número")
    if(typeof a !== "number")return console.error(`El valor "${a}" ingresado, No es un numero`)
    if(a===0)return console.error("El numero no puede ser 0")
    if(Math.sign(a)===-1)return console.error(`El numero no puede ser negativo`)
    let n = 1
    for (let i = a; i > 1; i--) {
		n *= i
    }
    return console.info(`El factorial de ${a} es ${n}`)
}