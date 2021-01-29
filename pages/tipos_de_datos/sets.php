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
                    // set es un tipo de dato iterable que solo acepta valores unicos -> se parece a los arreglos
                    const set = new Set([1,2,3,3,4,5,true,false,false,{},{},"hola","HOla","43","43"])
                    console.log(set)
                    console.log(set.size)
                    const set2 = new Set()
                    set2.add(1)
                    set2.add(1)
                    set2.add(2)
                    set2.add(3)
                    set2.add(true)
                    set2.add(true)
                    set2.add({nombre:"hola"})
                    set2.add([2,2])
                    console.log(set2)
                    console.log(set2.size)
                    console.log("recorriendo set")
                    for (const item of set) {
                        console.log(item)
                    }
                    console.log("recorriendo set2")
                    set2.forEach(item=>console.log(item))
                    console.log(set[0])
                    let arr = Array.from(set)
                    console.log(arr)
                    console.log(arr[4])
                    set.delete("HOla")
                    console.log(set)
                    //metodo has valida el valor si existe en la colección de datos
                    console.log(set.has("hola"))
                    console.log(set.has(5))
                    //limpiar la colección de datos
                    set2.clear()
                    console.log(set2)
                </script>
            </div>
        </div>
    </div>
</body>
</html>