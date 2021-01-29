/* 15) Programa una función para convertir números de base binaria a decimal y viceversa,
pe. miFuncion(100,2) devolverá 4 base 10. */
export const convertirNumero = (binario = undefined)=>{
    if(binario === undefined) return console.warn("No ingresaste un número")
    if(typeof binario === "string") return console.error(`El valor "${binario}" NO es un número`)
    return console.info(`El Numero ${binario} es ${parseInt(binario,2).toString(16)}`)
}
/* 16) Programa una función que devuelva el monto final después de aplicar un descuento
a una cantidad dada, pe. miFuncion(1000, 20) devolverá 800. */
export const monto =(precio=undefined, descuento=undefined)=>{
    if(precio === undefined) return console.warn("No ingresaste un precio del producto")
    if(typeof precio === "string") return console.error(`El valor "${precio}" NO es un precio`)
    if(descuento === undefined) return console.warn("No ingresaste un porcentaje")
    if(typeof descuento === "string") return console.error(`El valor "${descuento}" NO es un porcentaje`)
    if(Math.sign(descuento)===-1)return console.error(`El porcentaje "${descuento}"No puede ser negativo`)
    if(descuento>100)return console.warn(`El "${descuento}%" No cumple con un rango 0% a 100%`)
    return console.info(`El Monto total es: ${precio-precio*(descuento / 100)}$`)
}
/* 17) Programa una función que dada una fecha válida determine cuantos años han pasado
hasta el día de hoy, pe. miFuncion(new Date(1984,4,23)) devolverá 35 años (en 2020). */
export let fecha = (edad=undefined) =>{
    if(edad === undefined) return console.warn("No ingresaste un fecha de nacimiento")
    if(!(edad instanceof Date)) return console.warn("El valor que ingresaste No es una fecha de nacimiento")
    if(typeof edad === "string") return console.error(`El valor "${edad}" NO es una fecha de nacimiento`)
    // if(/[A-Za-z0-9]/.test(edad)) return console.error(`El simbolo "${edad}" NO es una fecha de nacimiento`)

    // let hoy = new Date().getUTCFullYear()//getFullYear() son de años
    // let total = hoy - edad.getUTCFullYear()
    let hoyMenosFecha=new Date().getTime()-edad.getTime(),
    añosEnMS=1000*60*60*24*365,añosHumanos=Math.floor(hoyMenosFecha/añosEnMS)
    /*
    *1000 = es 1 segundo en javascript
    *60 = 60 segundo es 1 minuto
    *60 = 60 minuto es 1 hora
    *24 = 24hora es 1 día  === 52 semana aproximada a un año
    *365 = 365 día es 1 año
    */
    return (Math.sign(añosHumanos)=== -1)
    ? console.error(`Faltan ${Math.abs(añosHumanos)} años para el ${edad.getFullYear()}.`)
    :(Math.sign(añosHumanos)=== 1)
    ?console.info(`Han pasado ${añosHumanos} años, desde ${edad.getFullYear()}`)
    :console.info(`Estamo en la año actual ${edad.getFullYear()}.`);
}