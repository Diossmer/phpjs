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
            </div>
        </div>
    </div>
    <script src="../../public/assets/js/module.js" type="module">
    /* Importante colocar el tipo de "module" */
    </script>
    <script src="../../public/assets/js/no-module.js" nomodule>
    /* evitar error de duplicado del codigo soportado para navegador bajos */
    </script>
</body>
</html>