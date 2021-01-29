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
                    function* iterable(){
                        yield "hola"
                        console.log("Seguimos con más instrucciones de nuestro código")
                        yield "hola 3"
                        yield "hola 4"
                    }
                    let iterador = iterable()
                    /* console.log(iterador.next())
                    console.log(iterador.next())
                    console.log(iterador.next())
                    console.log(iterador.next()) */
                    for (const y of iterador) {
                        console.log(y)
                    }
                    const arr = [...iterable()]
                    console.log(arr)
                    function cuadrado(valor){
                        setTimeout(()=>{
                            return console.log({valor,resultado:valor * valor})
                        },Math.random()*1000)
                    }
                    function* generador(){
                        console.log("Inicia Generador")
                        yield cuadrado(0)
                        yield cuadrado(1)
                        yield cuadrado(2)
                        yield cuadrado(3)
                        yield cuadrado(4)
                        yield cuadrado(5)
                        console.log("Termina Generador")
                    }
                    let gen = generador()
                    for (const y of gen) {
                        console.log(y)
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>