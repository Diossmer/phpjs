<!DOCTYPE html>
<html lang="es">
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
                <button onclick="alert('HOLA')">Evento con atributo HTML</button> <br> <br>
                <button onclick="holaMundo()">Evento2 con atributo HTML</button> <br> <br>
                <button id="evento-semantico">Evento3 con manejador semántico</button> <br> <br>
                <button id="evento-multiple">Evento4 con manejador múltiple</button> <br> <br>
            </div>
        </div>
    </div>
    <script src="../../public/assets/js/dom/manejarevent.js" type="text/javascript"></script>
</body>
</html>