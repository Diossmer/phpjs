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
                    console.warn("WARNING")
                    console.error("ERROR")
                    console.info("ESTO ES INFORMATIVO")
                    console.log("Un registro de lo que ha pasado en nuestra aplicación")

                    let nombre = "jon",apellido="mirchan",edad=35
                    console.log(nombre)
                    console.log(apellido)
                    console.log(edad)
                    console.log(nombre,apellido,edad)
                    console.log(`Hola mi nombre es ${nombre} ${apellido} y tengo ${edad} años`)
                    console.log(`Hola mi nombre es %s %s y tengo %s años`,nombre,apellido,edad)//comodines
                    console.clear()
                    console.log(window)
                    console.log(document)
                    console.dir(window)
                    console.dir(nombre,apellido,edad)
                    console.clear()
                    console.group("curso de diossmer")
                    console.dir("curso de javascript")
                    console.log("curso nodejs")
                    console.groupEnd()
                    console.groupCollapsed("datos")
                    console.log("Grupo familiar")
                    console.groupEnd()
                    console.clear()
                    console.log(console)
                    console.table(Object.entries(console))
                    console.table(Object.entries(console).sort())
                    console.log(console.memory)
                    console.clear()
                    let numeros=[1,2,3,4,5], vocales=["a","e","i","o","u"]
                    console.table(numeros)
                    console.table(vocales)
                    const perro = {
                        nombre:"boni",
                        raza:"boxer",
                        color:"cafe"
                    }
                    console.table(perro)
                    console.clear()
                    console.time("mismaEtiqueta para el codigo")
                    const arreglo = Array(100)
                    for (let i = 0; i < arreglo.length; i++) {
                        arreglo[i]= i
                    }
                    console.timeEnd("mismaEtiqueta para el codigo")
                    console.log(arreglo)
                    console.clear()
                    for (let i = 0; i <= 10; i++) {
                        console.count("codigo for")
                        console.log(i)
                    }
                    console.clear()
                    let x = 1,
                    y=2,
                    pruebaXY="Se espera que x sea menor que y"
                    console.assert(x<=y,{x,y,pruebaXY})
                    console.assert(x>y,{x,y,pruebaXY})
                </script>
            </div>
        </div>
    </div>
</body>
</html>