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
                    let aleatorio = Math.round(Math.random()*100+5)
                    const objUsuarios = {
                        [`id_${aleatorio}`]:"valor aleatorio"
                    }
                    console.log(objUsuarios)
                    const usuario = ["Jon","Irma","Miguel","Diossmer","kEnAi"]
                    usuario.forEach((usuario,index)=>objUsuarios[`id_${index}`]=usuario)
                    console.log(objUsuarios)
                </script>
            </div>
        </div>
    </div>
</body>
</html>