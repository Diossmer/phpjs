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
                    var hola = "hola"
                    let hello = "Hello"
                    console.log(hola)
                    if(true)
                    console.log(hello)
                    console.log(window)
                    console.log(window.hola)
                    console.log(window.hello)
                    //comentario simple
                    /*comentario general*/
                    var musica = "rock";
                    console.log("Musica antes del bloque", musica)
                    {
                        var musica = "pop";
                        console.log("Musica dentro del bloque", musica)
                    }
                    console.log("Musica despues del bloque", musica)
                    /********************LET***************/
                    let musicas = "reggae";
                    console.log("Musica antes del bloque", musicas)
                    {
                        let musicas = "jazz";
                        console.log("Musica dentro del bloque", musicas)
                    }
                    console.log("Musica despues del bloque", musicas)
                </script>
            </div>
        </div>
    </div>
</body>
</html>