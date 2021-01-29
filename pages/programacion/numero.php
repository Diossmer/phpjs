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
                let a = 1993;
                //constructor->number()
                let b = new Number(a);
                console.log(a,b);
                //prototipo Number
                //[[PrimitiveValue]]: 1993 valor directo
                let c = 7.13;
                console.log(c.toFixed(4))//toFixed numero de decimale para mostrar
                console.log(parseInt(c))
                console.log(parseFloat(c))
                //typeof identifica el valor
                let d = "   3.41"
                console.log(typeof(c),typeof(d))
                console.log(a + b)
                console.log(c + d)
                console.log(c + parseInt(d))
                console.log(c + parseFloat(d))
                console.log(c + Number.parseInt(d))
                console.log(c + Number.parseFloat(d))
                </script>
            </div>
        </div>
    </div>
</body>
</html>