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
                /* console.log("INICIO")
                setTimeout(()=>{
                    console.info("HOLA ESTO ES UNA VEZ")
                },3000)//timeout
                setInterval(() => {
                    console.info("HOLA ESTO ES INDEFINIDAMENTE EL INTERVALO")
                }, 5000); */
                /* setInterval(() => {
                    console.log(new Date().toLocaleTimeString())
                }, 1000); */
                //para que funcione debe guardarse en una variable.
                /* console.log(`ante del temporizador`)
                let temporizador = setTimeout(() => {
                    console.log(new Date().toLocaleTimeString())
                }, 1000);
                console.log(`ante del clear`)
                clearTimeout(temporizador)
                console.log(`despues del clear`) */
                console.log(`ante del temporizadorr`)
                let temporizadorr = setInterval(() => {
                    console.log(new Date().toLocaleTimeString())
                }, 1000);
                console.log(`ante del clear`)
                clearInterval(temporizadorr)
                console.log(`despues del clear`)
                </script>
            </div>
        </div>
    </div>
</body>
</html>