/* 18) Programa una función que dada una cadena de texto cuente el número de vocales y consonantes,
pe. miFuncion("Hola Mundo") devuelva Vocales: 4, Consonantes: 5. */
export const contarLetras=(cadena="")=>{
    if(!cadena) return console.warn("No ingresaste una cadena de texto")
    if(typeof cadena !== "string") return console.error(`El valor "${cadena}" NO es una cadena de texto`)
    let vocales=0,consonantes=0;
    cadena = cadena.toLocaleLowerCase()
    for (const letra of cadena) {
        if(/[aeiouáéíóúäëïöü]/.test(letra))vocales++;
        if(!(/[bcdfghjklmñpqrstvwxyz\s]+/.test(letra)))consonantes++;
    }
    return console.info({
        cadena,
        vocales,
        consonantes
    })
}
/* 19) Programa una función que valide que un texto sea un nombre válido,
pe. miFuncion("Jonathan MirCha") devolverá verdadero. */
export const validarNombre=(nombre="")=>{
    if(!nombre) return console.warn("No ingresaste una cadena de texto")
    if(typeof nombre !== "string") return console.error(`El valor "${nombre}" NO es una cadena de texto`)

    let regExp=/^[\w\s]+$/g.test(nombre)
    return (regExp)
    ?console.info(`"${nombre}", es un nombre válido`)
    :console.warn(`"${nombre}", NO es un nombre válido`)
}
/* 20) Programa una función que valide que un texto sea un email válido,
pe. miFuncion("jonmircha@gmail.com") devolverá verdadero. */
/[\w]+.[\w].com/.test()
export const validarEmail=(email="")=>{
    if(!email) return console.warn("No ingresaste una cadena de texto")
    if(typeof email !== "string") return console.error(`El valor "${email}" NO es una cadena de texto`)
    // RegExp("/[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})/","i")
    let regExp=/[a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})/i.test(email)
    return (regExp)
    ?console.info(`"${email}", es un email válido`)
    :console.warn(`"${email}", NO es un email válido`)
}