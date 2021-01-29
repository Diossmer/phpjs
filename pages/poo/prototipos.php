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
                <script>
                    //POO
                    /*
                    clases - modelo a seguir
                    objetos - Es una instancia de una clase (copia)
                    atributos - Es una caracteristica o pripiedad del objeto
                    (son variables dentro de un objeto)
                    métodos - Son las acciones que un objeto puede realizar (son funciones dentro de un objeto)
                    */
                    /*
                    const animal = {
                        nombre: "snoopy",
                        sonar(){
                            console.log("hago sonido por que estoy vivo.")
                        }
                    }
                    const animal2 = {
                        nombre: "Lola Bunny",
                        sonar(){
                            console.log("hago sonido por que estoy vivo.")
                        }
                    }
                    console.log(animal)
                    console.log(animal2)
                    */
                    //Funcion Constructora
                    /* function Animal(nombre,genero){
                        //Atributo
                        this.nombre = nombre;
                        this.genero = genero;
                        //Métodos
                        this.sonar = function(){
                            console.log(`Hago sonido por que estoy vivo`)
                        }
                        this.saludar = function(){
                            console.log(`hola mi nombre es ${nombre}`)
                        }
                    } */
                    //Funcion Constructora donde asignamo al prototipo no a la funcion como tál
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
                    const snoopy = new Animal("Snoopy","Macho"),
                    lolaBunny = new Animal("Lola Bunny","Hembra")
                    console.log(snoopy,lolaBunny)
                    snoopy.sonar()
                    snoopy.saludar()
                    lolaBunny.sonar()
                    lolaBunny.saludar()
                </script>
            </div>
        </div>
    </div>
</body>
</html>