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
                    let vale;
                    const PI = 3.14169;
                    // const vale;
                    a = "Diossmer";
                    console.log({a},[PI,a]);
                    /*Cuando utilizar const -> cuando una variable que no cambie su valor durante
                    el flujo del programa.
                    cuando utilizar let nesecito una variable que va cambiar
                    el contenido. */
                    const objeto={nombre : "Diossmer", edad : 26}
                    const colores = ["azul","rojo","negro"]
                    /*Los valores compuesto en una constante se pude cambiar el valor o propiedad*/
                    console.log(objeto);
                    console.log(colores)
                    objeto.correo = "Diossmer@gmail.com";
                    colores.push("naranja");
                </script>
            </div>
        </div>
    </div>
</body>
</html>