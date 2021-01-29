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
                    //sin destructuración
                    let numeros = [1,2,3]
                    let uno = numeros[0],
                    dos = numeros[1],
                    tres = numeros[2]
                    console.log(uno,dos,tres)
                    //con destructuración
                    const [one,two,three] = numeros
                    console.log(one,two,three)

                    //con caracteres destructuracion
                    let persona = {
                        nombre:"Diossmer",
                        apellido:"Villamizar",
                        edad:[numeros1=33,numeros2=31],
                        color:{valor:"negro", dato:"azul"}
                    }

                    let {nombre,apellido,edad,color} = persona
                    console.log(nombre,apellido,edad,color)
                </script>
            </div>
        </div>
    </div>
</body>
</html>