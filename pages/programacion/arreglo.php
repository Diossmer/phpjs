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
                    const a = [];
                    const b =[1,true,"hola",["A","B","C",[1,2,3]]]
                    console.log([],a,b)
                    console.log(b.length)
                    console.log(b[2])
                    console.log(b[3][2])
                    console.log(b[3][3][0])

                    const c = Array.of("x","Y","Z",9,8,7)
                    console.log(c)
                    const d = Array("x","Y","Z",9,8,7)
                    console.log(d)

                    const e = Array(10).fill("Dos") //llenar valores -> fill
                    console.log(e)

                    const f = new Array();
                    console.log(f);
                    const g = new Array(1,2,3,"esto es un arreglo antiguo");
                    console.log(g[3]);

                    const colores = ["rojo","azul","verde"]
                    colores.push("morado")//agrega el elemento colocandolo al final
                    colores.pop() //Elimina el elemento final
                    console.log(colores)

                    colores.forEach(function(color,i){
                        console.log(`<li id="${i}">${color}</li>`)
                    })
                </script>
            </div>
        </div>
    </div>
</body>
</html>