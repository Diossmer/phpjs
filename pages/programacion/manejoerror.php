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
                try {
                    console.log("En el Try se agrega el codigo a evaluar")
                    dohko
                    console.log("segundo mensaje en el try")
                } catch (error) {
                    console.log("Catch, captura cualquier error surgido o lanzado en el try")
                    console.log(error)
                }finally{
                    console.log("El bloque finally se ejecutara siempre al final de un bloque try-catch")
                }

                try {
                    let numero = "y"
                    if(isNaN(numero)){
                        throw new Error("EL CARACTER INTRODUCIDO NO ES UN NUMERO.")
                    }
                        console.log(numero*numero)
                } catch (error) {
                    console.log("Se produjo el siguiente Error"+error.message)
                    console.log("Error generico "+ error)
                }finally{
                }
                </script>
            </div>
        </div>
    </div>
</body>
</html>