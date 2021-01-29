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
                    // en javascript todo es un objeto
                    let nombre = "Linibeth";
                    let apellido = 'Valores';
                    let junto = `Diossmer villamizar`;
                    let espacio = "    VEA es espacio    ";
                    console.log(
                    nombre.length,
                    apellido.length,
                    junto.length,
                    nombre.toUpperCase(),
                    junto.includes("Diossmer"),
                    junto.includes("diossmer"),
                    espacio.trimRight(),
                    espacio.trimLeft(),
                    espacio.trim(),
                    junto.split("r"))
                </script>
            </div>
        </div>
    </div>
</body>
</html>