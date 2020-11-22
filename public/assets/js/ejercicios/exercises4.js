/*
12) Programa una función que determine si un número es primo
(aquel que solo es divisible por sí mismo y 1) o no, pe.
miFuncion(7) devolverá true.
*/
export const esPrimo =(numero = undefined)=> {
    if(numero === undefined){
        console.warn(`No ingresaste un número.`)
    }else if(typeof numero !== "number"){
        console.error(`El valor "${numero}" ingresado, NO es un número.`)
    }else if(numero === 0){
        console.error(`El numero no puede ser 0`)
    }else if(Math.sign(numero)===-1){
        console.error(`El número no puede ser negativo`)
    }else{
        let divisible = false
        for(let i = 2; i<numero; i++){
            if((numero % i)===0){
                divisible=true
                break
            }
        }
        return(divisible)?
        console.info(`El número ${numero}, NO es primo`)
        :console.info(`El número ${numero}, Sí es primo`)
    }
}
/* if(numero === 0 || numero === 1 || numero === 4)return console.log(false);
for (let x = 2; x < numero/2; x++) {
    if(numero % x === 0) return console.log(false);
}
    return console.log(true) */
/*
13) Programa una función que determine si un número es par o impar, pe.
miFuncion(29) devolverá Impar.
*/
export const parImpar=(numero = undefined)=>{
    if(numero === undefined) return console.warn("No ingresaste un número")
    if(typeof numero !== "number") return console.error(`El valor ${numero} ingresado NO es un número.`)
    return ((numero % 2)=== 0)
    ?console.info(`El número "${numero}" Es Par`)
    :console.info(`El número "${numero}" Es Impar`)
}
/*
14) Programa una función para convertir grados Celsius a Fahrenheit y viceversa, pe.
miFuncion(0,"C") devolverá 32°F.
*/
export let convertGrade=(grados=undefined,unidad=undefined)=>{
    if(grados === undefined){
        return console.warn(`No ingresaste grado a convertir.`)
    }else if(typeof grados !== "number"){
        return console.error(`El valor "${grados}" ingresado, NO es un número.`)
    }else if(unidad === undefined){
        return console.error(`El numero no ingresaste el tipo de grado a convertir`)
    }else if(typeof unidad !== "string"){
        return console.error(`El valor "${unidad}" ingresado, NO es una cadena de texto.`)
    }else if(unidad.length !== 1 || !/(C|F)/i.test(unidad)){
        return console.warn("Valor de unidad no reconocido")
    }else if(/(C)/i.test(unidad)){
        return console.info(`${grados}°C = ${Math.round(grados * (9/5)+32)}°F`)
    }else if(/(F)/i.test(unidad)){
        return console.info(`${grados}°F = ${Math.round((grados-32) * (9/5))}°C`)
    }else{
        return console.error("El tipo de grados a convertir NO es Válido")
    }
}
/* let fahrenheit=((celsius*9)/5)+32;
console.warn(`${fahrenheit}°F`); */