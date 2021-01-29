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
                // loops
                let contador = 0
                while(contador < 10){
                    console.log(contador)
                    contador++
                }
                do{
                    contador++
                    console.log("do while "+contador)
                }while(contador < 10)
                for (let i = 0; i < 10; i++) {
                    console.log(`for ${i}`);
                }
                const obj={
                    nombre:"Diossmer",
                    apellido:"Villamizar",
                    edad:35
                }
                for (const propiedad in obj) {
                    console.log(`key ${propiedad} value ${obj[propiedad]}`)
                }
                const numero=[12,34,53,23,52]
                for (const elemento of numero) {
                    console.log(elemento)
                }
                </script>
            </div>
        </div>
    </div>
</body>
</html>