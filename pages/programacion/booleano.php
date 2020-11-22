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
                    let verdadero = true;
                    let falso = false
                    let v = Boolean(true)
                    let f = Boolean(false)
                    console.log(verdadero)
                    console.log(falso)
                    console.log(v)
                    console.log(f)
                    console.log(typeof verdadero,typeof falso)
                    console.log(Boolean(0))
                    console.log(Boolean(-8))
                    console.log(Boolean(""))
                    console.log(Boolean(" "))
                </script>
            </div>
        </div>
    </div>
</body>
</html>