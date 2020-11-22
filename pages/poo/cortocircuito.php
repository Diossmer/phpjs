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
                    /* Cortocircuito OR - Cuando el valor de la izquierda en la expresion siemprez pueda validar a true, es el valor que se cargará por defecto */
                    function saludar(nombre){
                        nombre = nombre || "Desconocido"
                    console.log(`hola ${nombre}`)
                    }
                    saludar("diossmer")
                    saludar()

                    console.log("cadena" ||"valor de la derecha")
                    console.log(22 ||"valor de la derecha")
                    console.log(true ||"valor de la derecha")
                    console.log([] ||"valor de la derecha")
                    console.log({} ||"valor de la derecha")
                    console.log(false ||"valor de la derecha")
                    console.log(null ||"valor de la derecha")
                    console.log(undefined ||"valor de la derecha")
                    console.log("" ||"valor de la derecha")
                    console.log(NaN ||"valor de la derecha")
                    /* Cortocircuito AND - Cuando el valor de la izquierda en la expresion siempre pueda validar a false, es el valor que se cargará por defecto */
                    console.log("cadena" &&"valor de la derecha")
                    console.log(22 &&"valor de la derecha")
                    console.log(true &&"valor de la derecha")
                    console.log([] &&"valor de la derecha")
                    console.log({} &&"valor de la derecha")
                    console.log(false &&"valor de la derecha")
                    console.log(null &&"valor de la derecha")
                    console.log(undefined &&"valor de la derecha")
                    console.log("" &&"valor de la derecha")
                    console.log(NaN &&"valor de la derecha")
                </script>
            </div>
        </div>
    </div>
</body>
</html>