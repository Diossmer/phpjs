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
                <p><a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Classes">Definiendo clases</a>
                y
                <a href="https://www.todojs.com/clases-en-ecmascript-2015-es6/">Definiendo herencia</a></p>
                <script>
                class Animal{
                    constructor(nombre,genero){
                        this.nombre = nombre;
                        this.genero = genero;
                    }
                    //Metodos
                    sonar(){
                        console.log(`Hago sonido por que estoy vivo`)
                    }

                    saludar(){
                        console.log(`hola mi nombre es ${this.nombre}`)
                    }
                }
                class Perro extends Animal{
                    constructor(nombre,genero,tamaño){
                        super(nombre,genero);
                        this.tamaño=tamaño
                    }
                    //sobre escritura método
                    sonar(){
                        console.log(`Soy un perro y mi sonido es un ladrido`)
                    }
                    ladrar(){
                        console.log(`Guau Guau!!!`)
                    }
                }
                //no puede mover este codigo en al azar tiene un orden de flujo, si no se cumple dá error
                    const mimi = new Animal("Mimi","Hembra"),
                    scooby = new Perro("Scooby","Macho","Gigante")
                    console.log(mimi);
                    mimi.saludar()
                    mimi.sonar()
                    console.log(scooby);
                    scooby.saludar()
                    scooby.sonar()
                    scooby.ladrar()
                </script>
            </div>
        </div>
    </div>
</body>
</html>