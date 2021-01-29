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
                <p><a href="https://lenguajejs.com/javascript/caracteristicas/clases-es6/">GETTER y SETTER</a></p>
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
                    constructor(nombre,genero,tamaño,raza){
                        super(nombre,genero);
                        this.tamaño=tamaño
                        this.raza=null
                    }
                    //sobre escritura método
                    sonar(){
                        console.log(`Soy un perro y mi sonido es un ladrido`)
                    }
                    ladrar(){
                        console.log(`Guau Guau!!!`)
                    }
                //Un método estáticos se puede ejecutar sin necesidad de instanciar la clase
                static queEres(){
                    console.log("Los perros somos lo mejores amigos del hombre, aunque aveces no lo valoramos.")
                }
                //Los setters y getters son métoodos especiales que nos permiten establecer y obtener los valores de atributos de nuestra clase.
                get getRaza(){
                    return this.raza
                }
                set setRaza(raza){
                    this.raza=raza;
                }
                }
                Perro.queEres()

                const mimi = new Animal("Mimi","Hembra"),
                    scooby = new Perro("Scooby","Macho","Gigante")
                    console.log(mimi);
                    mimi.saludar()
                    mimi.sonar()
                    console.log(scooby);
                    scooby.saludar()
                    scooby.sonar()
                    scooby.ladrar()
                    console.log(scooby.getRaza)
                    scooby.setRaza="Grán Danés";
                    console.log(scooby.getRaza)
                </script>
            </div>
        </div>
    </div>
</body>
</html>