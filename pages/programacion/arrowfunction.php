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
                    /* funcion anonima */
                    const saludo = function(){
                        console.log("Hola")
                    }
                    saludo()
                    /* arrow function expressive */
                    const saludos=()=>{console.log("Hola con llave")}
                    saludos()
                    const saludar=()=>console.log("Hola si llave")
                    saludar()
                    /* con variables */
                    const saludamos = nombre=> console.log(`Hola ${nombre}`)
                    saludamos("solo cuando es una sola variable se quita el ()")
                    /* con aritméticos */
                    const sumar = (a,b)=> a + b
                    console.log(sumar(1,3))
                    /* funcion de varias lineas */
                    const funcionMultiple=()=>{
                        console.log("uno","dos","tres")
                    }
                    funcionMultiple()
                    /* arreglo */
                    const numeros = [1,2,3,4,5,6]
                    numeros.forEach((a,i)=>console.log("numero "+ a +" posición "+ i))
                    // this hace referencia al objeto o al contexto que te encuentre
                    /*
                    function perro(){
                        console.log(this)
                    }
                    perro()
                    */
                    /*
                    const perro = {
                        nombre:"kenai",
                        ladrar:function(){
                            console.log(this)
                        },
                    }
                    perro.ladrar()
                    */
                    /*
                    const perro = {
                        nombre:"kenai",
                        ladrar:()=>{
                            console.log(this)
                        },
                    }
                    perro.ladrar()
                    */
                    const perro = {
                        nombre:"kenai",
                        ladrar(){
                            console.log(this)
                        },
                    }
                    perro.ladrar()
                </script>
            </div>
        </div>
    </div>
</body>
</html>