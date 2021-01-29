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
                    /*
                    Una iteración es una vuelta en la interacción en ese ciclo
                    iterable: Es una estructura de datos líneal que hace que su elemento sean publicos y se
                    pueda recorrer.
                    iterador: Es el apuntador que esta recorreindo los elemento.
                    */
                   const iterable = "[1,2,3,4,5] mundo";
                   //Accedemos al iterador del iterable
                   const iterador = iterable[Symbol.iterator]()
                   console.log(iterable)
                   console.log(iterador)
                   //console.log(iterador.next())
                   //console.log(iterador.next())
                   //console.log(iterador.next())
                   //console.log(iterador.next())
                   //console.log(iterador.next())
                   //console.log(iterador.next())
                   let next = iterador.next()
                   while(!next.done){
                       console.log(next.value)
                       next = iterador.next()
                   }
                </script>
            </div>
        </div>
    </div>
</body>
</html>