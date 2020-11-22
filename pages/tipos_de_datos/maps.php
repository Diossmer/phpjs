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
                    //maps es un valor complejos -> se parece a los objetos
                    let mapa = new Map();
                    mapa.set("nombre","Diossmer")
                    mapa.set("apellido","Villamizar")
                    mapa.set("edad",26);
                    console.log(mapa)
                    console.log(mapa.size)
                    console.log(mapa.has("correo"))
                    console.log(mapa.has("nombre"))
                    console.log(mapa.get("nombre"))
                    console.log(mapa.set("nombre","Diossmer Villamizar"))
                    console.log(mapa.get("nombre"))
                    console.log(mapa.delete("apellido"))
                    //no es recomendable
                    mapa.set(19,"diecinueve")
                    mapa.set(false,"falso")
                    mapa.set({},{})
                    //fin
                    console.log(mapa)
                    for (const [key,value] of mapa) {
                        console.log(`Llave:${key}, Valor:${value}`)
                    }
                    const mapa2 = new Map([
                        ["nombre","bobby"],
                        ["edad",8],
                        ["animal","perro"],
                        [null,"nulo"],
                        [undefined,"indefinido"]
                    ])
                    console.log(mapa2)
                    const llavesMapa2=[...mapa2.keys()]
                    const valoresMapa2=[...mapa2.values()]
                    console.log(llavesMapa2)
                    console.log(valoresMapa2)
                </script>
            </div>
        </div>
    </div>
</body>
</html>