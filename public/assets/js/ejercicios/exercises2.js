/*
5) Programa una función que invierta las palabras de una cadena de texto, pe.
miFuncion("Hola Mundo") devolverá "odnuM aloH".
*/
export const cadenaAInvertir=(a)=>(/[^0-9]$/.test(a))?(console.log(a.split("").reverse().join(""))):(console.log('error ingrese caracteres'))
/*
6) Programa una función para contar el número de veces que se repite una palabra en un texto largo, pe.
miFuncion("hola mundo adios mundo", "mundo") devolverá 2.
*/
export const contarNumero=(cadena="",texto="")=>{
    if(!cadena) return console.warn("no ingresaste el texto largo")
    if(!texto) return console.warn("no ingresaste la palabra a evaluar")
    let i = 0,
    contador = 0;
    while(i!==-1){
        i=cadena.indexOf(texto,i)
        if(i!==-1){
            i++;
            contador++;
        }
    }
    return console.info(`la palabra ${texto} se repite ${contador} veces`)
}
/*
7) Programa una función que valide si una palabra o frase dada, es un palíndromo
(que se lee igual en un sentido que en otro), pe.
mifuncion("Salas") devolverá true.
*/
export function palindromo(h){
    if(/\d/.test(h)){
        console.warn("coloque una frase o palabra capícua (polindromo)")
    }else{
        let f=h.split("").reverse().join("").toLowerCase()
        let k= h.toLowerCase()
        if(k === f){
            console.info(`Palíndromo -> ${h}`)
        }else if(f !== h){
            console.error("No existe ninguna combinación en la frase o palabra")
        }
    }
}
/*
8) Programa una función que elimine cierto patrón de caracteres de un texto dado, pe.
miFuncion("xyz1, xyz2, xyz3, xyz4 y xyz5", "xyz") devolverá  "1, 2, 3, 4 y 5.
*/
export let elmininarPatron=(texto="",patron="")=>{
    (!patron)?
    console.warn("No ingresaste un texto")
    :(!patron)?
    console.warn("No ingresaste un patrón de caracteres")
    :console.info(texto.replace(new RegExp(patron,"ig"),""));
}