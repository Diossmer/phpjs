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
                    /*concatenación +=  ó +
                    comilla simple ''
                    comilla doble ""
                    template String `` no es (´´)
                    */
                    let nombre = "Diossmer"
                    let apellido = 'Villamimzar'
                    let resultado = "mi nombre es "+ nombre+apellido
                    console.log(resultado)
                    //interpolar $(variable)
                    let resultado2 = `mi nombre es ${nombre}${apellido}.`
                    console.log(resultado2);
                    /*Colocar string(cadena de texto) valores html como:
                    <h1>hola como estas</h1>
                    <p>Lorem ipsum dolor, <br>
                    sit amet consectetur adipisicing elit.<br>
                    </p>*/
                    let dato = "<h1>hola como estas</h1>"
                    dato += "<p>Lorem ipsum dolor, <br> sit amet consectetur adipisicing elit.<br></p>"
                    console.log(dato)
                    //con template string
                    let dato2 =`
                    <h1>hola como estas</h1>
                    <p>Lorem ipsum dolor, <br>
                    sit amet consectetur adipisicing elit.<br>
                    </p>`
                    console.log(dato2)
                </script>
            </div>
        </div>
    </div>
</body>
</html>