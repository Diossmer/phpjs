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
                    /*
                    window.alert("Hola esto es una Alerta")
                    window.confirm("Hola esto es una confirmación")
                    window.prompt("Hola esto es un Aviso y le permite al usuario ingresar")
                    */
                    let alerta=alert("Hola esto es una Alerta"),
                    confirmacion=confirm("Hola esto es una confirmación"),
                    aviso = prompt("Hola esto es un Aviso y le permite al usuario ingresar")
                    console.log(alerta)
                    console.log(confirmacion)
                    console.log(aviso)
                </script>
            </div>
        </div>
    </div>
</body>
</html>