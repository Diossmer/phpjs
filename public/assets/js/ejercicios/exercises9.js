/* 27) Programa una clase llamada Pelicula.
La clase recibirá un objeto al momento de instanciarse con los siguentes datos:
id de la película en IMDB, titulo, director, año de estreno, país o países de origen, géneros y calificación en IMBD.
- Todos los datos del objeto son obligatorios.
- Valida que el id IMDB tenga 9 caracteres, los primeros 2 sean letras y los
7 restantes números.
- Valida que el título no rebase los 100 caracteres.
- Valida que el director no rebase los 50 caracteres.
- Valida que el año de estreno sea un número entero de 4 dígitos.
- Valida que el país o paises sea introducidos en forma de arreglo.
- Valida que los géneros sean introducidos en forma de arreglo.
- Valida que los géneros introducidos esten dentro de los géneros aceptados*.
- Crea un método estático que devuelva los géneros aceptados*.
- Valida que la calificación sea un número entre 0 y 10 pudiendo ser decimal de una posición.
- Crea un método que devuelva toda la ficha técnica de la película.
- Apartir de un arreglo con la información de 3 películas genera 3 instancias de la clase de 
forma automatizada e imprime la ficha técnica de cada película.
*Genre Acept: Action,Adult,Adventure,Animation,Biography,Comedy,Crime,Documentary,
Drama,Family,Fantasy,Film Noir,Game-Show,History,Horror,Musical,Music,Mystery,News,Reality-TV,
Romance,Sci-Fi,Short,Talk-Show,Thriller,War,Western.
*/
export class Pelicula{
    constructor({id,titulo,director,estreno,pais,generos,calificacion}){
        this.id = id;
        this.titulo = titulo;
        this.director = director
        this.estreno = estreno
        this.pais = pais
        this.generos = generos
        this.calificacion = calificacion
        this.validarIMBD(id);
        this.validarTitulo(titulo)
        this.validarDirector(director)
        this.validarEstreno(estreno)
        this.validarPais(pais)
        this.validarGeneros(generos)
        this.validarCalificacion(calificacion)
    }
    static get listaGeneros(){
        return["Action","Adult","Adventure","Animation","Biography","Comedy","Crime","Documentary",
            "Drama","Family","Fantasy","Film Noir","Game-Show","History","Horror","Musical","Music","Mystery","News","Reality-TV",
            "Romance","Sci-Fi","Short","Talk-Show","Thriller","War","Western"]
    }
    static generosAceptados(){
        return console.info(`Los generos aceptados son ${Pelicula.listaGeneros.join(",")}`)
    }
    validarCadena(propiedad,valor){
        if(!valor)return console.warn(`${propiedad}:"${valor}" esta vacío.`)
        if(typeof valor !== "string")return console.error(`${propiedad}:"${valor}" ingresado NO es una cadena de texto.`)
        return true
    }
    validarLongitudCadena(propiedad,valor,longitud){
        if(valor.length > longitud)return console.error(`${propiedad}:"${valor}" excede el número de caracteres permitidos (${longitud}).`)
        return true
    }
    validarNumero(propiedad,valor){
        if(!valor)return console.warn(`${propiedad}: "${valor}" ingresado, NO es un número.`)
        return true
    }
    validarArreglo(propiedad,valor){
        if(!valor)return console.warn(`${propiedad}:"${valor}" esta vacío.`)
        if(!(valor instanceof Array))return console.error(`${propiedad}:"${valor}" ingresado NO es un arreglo.`)
        if(valor.length === 0) return console.error(`${propiedad}:"${valor}" no tiene datos`)
        for(let cadena of valor){
            if(typeof cadena !== "string") return console.error(`El valor "${cadena}" ingresado, NO es una cadena de texto.`)
        }
        return true
    }
    validarIMBD(id){
        if(this.validarCadena("IMDB id",id)){
            if(!(/^([a-z]{2}([0-9]{7}))$/.test(id)))
                return console.error(`IMDB id "${id}" no es válido, debe tener 9 caracteres, los 2 primeros letras minúsculas, los 7 restantes números.`)
        }
    }
    validarTitulo(titulo){
        if(this.validarCadena("Título",titulo)){
            this.validarLongitudCadena("Título",titulo,100)
        }
    }
    validarDirector(director){
        if(this.validarCadena("Director",director)){
            this.validarLongitudCadena("Director",director,50)
        }
    }
    validarEstreno(estreno){
        if(this.validarNumero("Año de Estreno",estreno)){
            if(!(/^([0-9]){4}$/.test(estreno)))
                return console.error(`Año de Estreno "${estreno}" no es válido, debe ser un número de 4 digitos.`)
        }
    }
    validarPais(pais){
        this.validarArreglo("País",pais)
    }
    validarGeneros(generos){
        if(this.validarArreglo("Géneros",generos)){
            for (const genero of generos) {
                // console.log(genero,Pelicula.listaGeneros.includes(genero))
                if(!Pelicula.listaGeneros.includes(genero)){
                    console.error(`Género(s) incorrectos "${generos.join(",")}"`)
                    Pelicula.generosAceptados();}
            }
        }
    }
    validarCalificacion(calificacion){
        if(this.validarNumero("Calificación",calificacion))
            return (calificacion < 0 || calificacion > 10)
            ? console.error(`La calificación tiene que estar en un rango entre 0 y 10`)
            : this.calificacion = calificacion.toFixed(1);
    }
    fichaTecnica(){
        console.info(`Ficha Ténica:\nIMDB ID: "${this.id}"\nTítulo: "${this.titulo}"\nDirector: "${this.director}"\nAño de Estreno: "${this.estreno}"\nPaís: "${this.pais}"\nGéneros: "${this.generos}"\nCalificacion: "${this.calificacion}"`)
    }
}