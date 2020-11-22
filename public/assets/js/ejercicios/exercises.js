import {palindromo,cadenaAInvertir,contarNumero,elmininarPatron} from "./exercises2.js";  //<script src="" type="module">Esto funciona</script>
import {azar,capicua,factorial} from "./exercises3.js"
import {esPrimo,parImpar,convertGrade} from "./exercises4.js"
import {convertirNumero,monto,fecha} from "./exercises5.js" //(default),{clases,funcione,variable}
import {contarLetras,validarNombre,validarEmail} from "./exercises6.js"
import {devolverCuadrados,arrayMinMax,separarParesImpares} from "./exercises7.js"
import {ordenarArreglo,quitarDuplicados,promedio} from "./exercises8.js"
import {Pelicula} from "./exercises9.js"
(function(d,w,c){
    /*
    1) Programa una función que cuente el número de
    caracteres de una cadena de texto, pe.
    miFuncion("Hola Mundo") devolverá 10.
    */
    try{
    let conteo=(f)=> c.log(`"${f}" -> tiene ${f.length} caracteres`)
    conteo("Hola Mundo")
    }catch(e){
        c.log("Error de cadena: ",e.message)
    }finally{}
    /*
    2) Programa una función que te devuelva el texto
    recortado según el número de caracteres indicados, pe.
    miFuncion("Hola Mundo", 4) devolverá "Hola".
    */
    const cortarCaracteres=(a,n)=>(a===""||a===" ")?
    c.warn("No es valido el caracter") : (n === undefined || n===" " || n=== "")?
    c.warn(`no ingresaste la longitud para cortar el texto`): c.info(a.slice(0,n))
    cortarCaracteres("Hola Mundo",4)
    /*
    3) Programa una función que dada una String te devuelva
    un Array de textos separados por cierto caracter, pe.
    miFuncion('hola que tal', ' ') devolverá ['hola', 'que', 'tal'].
    */
    const caracte=(g,b)=>c.log(g.split(b))
    caracte("hola que tal"," ")
    /*
    4) Programa una función que repita un texto X veces, pe.
    miFuncion('Hola Mundo', 3) devolverá Hola Mundo Hola Mundo Hola Mundo.
    */
    const repetir=(a,b)=>{
        if(!a)return c.warn("No ingresaste un texto")
        if(b===undefined)return c.warn("No ingresaste el numero de veces a repetir el texto")
        if(b===0)return c.error("el numero no puede ser cero")
        if(Math.sign(b)===-1)return c.error("el numero de veces no puede ser negativo")
        for (let i = 1; i <= b; i++)c.log(a,i)
    }
    repetir('Hola Mundo',3)
    //ejercicios parte 2 video 36
    cadenaAInvertir("Hola Mundo")
    contarNumero("Hola mundo / adios mundo","mundo")//Fail EL ANALISIS MIO es con index while y no es con for
    palindromo("Ana")
    elmininarPatron("xyz1, xyz2, xyz3, xyz4 y xyz5", "xyz") // Fail
    //ejercicio parte 3 video 37
    azar(501,600)
    capicua(2002)
    factorial(5)
    //ejercicio parte 4 video 38
    esPrimo(7)
    parImpar(12)
    convertGrade(100,"C")
    //ejercicio parte 5 video 39
    convertirNumero(101010)
    monto(1000,20)
    fecha(new Date(1993,12,14))
    //ejercicio parte 6 video 40
    contarLetras("Lorem, impsum..")
    validarNombre("Diossmer")
    validarEmail("Diossmer@gmail.com")
    //ejercicio parte 7 video 41
    devolverCuadrados([1,2,8])
    arrayMinMax([1, 4, 5, 99, -60])
    separarParesImpares([1,2,3,4,5,6,7,8,9,0])
    //ejercicio parte 8 video 42
    ordenarArreglo([7,5,7,3,1])
    quitarDuplicados(["x", 10, 2, "10", true])
    promedio([1,2,3,4,5,6,7,8,9,0])
    //ejercicio parte 9 video 43
    /*
    const peli = new Pelicula({
        id:"tt1234567",
        titulo:"Título de la película",
        director:"Director de la película",
        estreno:2020,
        pais:["México","Francía","Alemanía"],
        generos:["comedia","dragon"],
        calificacion: 7.789,
    })
    peli;
    peli.fichaTecnica();
    Pelicula.generosAceptados();
    */
    const Pelis = [{
        id:"tt0754342",
        titulo:"Into the Wild",
        director:"Sean Pen",
        estreno:2007,
        pais:["USA","ESPAÑA"],
        generos:["Adventure", "Comedy", "Drama", "Biography"],
        calificacion:8.1
    },{
        id:"tt0455462",
        titulo:"Rocky Balboa",
        director:"Sylvester Stallone",
        estreno:2006,
        pais:["USA"],
        generos:["Action", "Comedy", "Drama", "Biography"],
        calificacion:7.3
    },{
        id:"tt0468569",
        titulo:"The Dark Knight",
        director:"Christopher Nolan",
        estreno:2007,
        pais:["USA","UK"],
        generos:["Action", "Crime", "Drama"],
        calificacion:9.0
    }]
    // Pelis.forEach(elemento => new Pelicula(elemento).fichaTecnica())
    Pelis.forEach(elemento => {
        elemento = new Pelicula(elemento)
        elemento.fichaTecnica()
    })
})(document,window,console);