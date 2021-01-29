<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../include/header.php') ?>
</head>
<body>
    <div class="wrap">
        <header class="header">
            <div class="header_contenido">
                <nav class="navegation">
                </nav>
            </div>
        </header>
        <div class="contenido">
            <h1>Contenido Javascript <span class="tutorial">TUTORIAL</span></h1>
            <div class="texto">
            <p><a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Herencia_y_la_cadena_de_protipos">Herencia y la cadena de prototipos
</a></p>
                <script>
                    /* EL PARADIGMA DE JAVASCRIPT FUNCIONA CON PROTOTIPOS
                    Funcion Constructora donde asignamo al prototipo no a la funcion como tál */
                    function Animal(nombre,genero){
                        //Atributo
                        this.nombre = nombre;
                        this.genero = genero;
                    }
                    //Métodos agregado al prototipo de la funcion constructora
                    Animal.prototype.sonar = function(){
                        console.log(`Hago sonido por que estoy vivo`)
                    }
                    Animal.prototype.saludar = function(){
                        console.log(`hola mi nombre es ${this.nombre}`)
                    }
                    //Herencia prototipíca
                    function Perro(nombre,genero,tamaño){
                        this.super=Animal
                        this.super(nombre,genero)
                        this.tamaño = tamaño;
                    }
                    //Perro esta heredando de Animal
                    Perro.prototype=new Animal()
                    Perro.prototype.constructor = Perro
                    //sobreescritura de métodos del prototipo padre en hijo
                    Perro.prototype.sonar = function(){
                        console.log("Soy un perro y mi sonido es u ladrido.")
                    }
                    Perro.prototype.ladrar = function(){
                        console.log("Guau Guau !!!")
                    }
                    Perro.prototype.saludar = function(){
                        console.log("sobreescrito HOLA!!!")
                    }
                    /**********************Ejercicio de la Herencia*******************/
                    /*
                    El constructor es llamado en el momento de la creación de la instancia
                    (el momento en que se crea la instancia del objeto).
                    El constructor es un método de la clase. En JavaScript, la función sirve como el constructor
                    del objeto, por lo tanto, no hay necesidad de definir explícitamente un
                    método constructor.
                    */
                    function Conejo(a,b,color){
                        /*
                        La palabra clave super es usada para acceder y llamar funciones del padre de un objeto.
                        Las expresiones super.prop y super[expr] son válidas en cualquier definición de método
                        tanto para clases como para objetos literales.
                        */
                        this.super = Animal
                        this.super(a,b)
                        this.color=color
                    }
                    //Conejo esta heredando de animal
                    Conejo.prototype = new Animal()
                    Conejo.prototype.constructor = Conejo
                    //sobreescribimos los métodos de prototipo padre eh hijo
                    Conejo.prototype.sonar = function(){
                        console.log("Soy un Conejo y mi color es ")
                    }
                    Conejo.prototype.colores = function(){
                        console.log(`${this.color}`)
                    }
                    const snoopy = new Perro("Snoopy","Macho","Mediano"),
                    lolaBunny = new Conejo("Lola Bunny","Hembra","negro")
                    console.log(snoopy,lolaBunny)
                    snoopy.sonar()
                    snoopy.ladrar()
                    snoopy.saludar()
                    lolaBunny.saludar()
                    lolaBunny.sonar()
                    lolaBunny.colores()
                </script>
            </div>
        </div>
    </div>
</body>
</html>