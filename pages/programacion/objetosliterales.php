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
                    let nombre = "kEnAi",edad = 7;

                    const perro = {
                        nombre:nombre,
                        edad:edad,
                        ladrar:function(){
                            console.log("guau guau!!!")
                        }
                    }
                    console.log(perro)
                    perro.ladrar()
                    //ecmascript
                    const dog = {
                        nombre,
                        edad,
                        raza:"callejero",
                        ladrar(){
                            console.log("guau guau guau !!!")
                        }
                    }
                    console.log(dog)
                    dog.ladrar()
                </script>
            </div>
        </div>
    </div>
</body>
</html>