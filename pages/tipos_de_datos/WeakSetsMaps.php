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
                    //mapa debiles y conjuntos debiles
            /* const ws = new WeakSet([1,2,3,3,4,5,true,false,false,{},{},"hola","HOla","43","43"]) */
                    const ws = new WeakSet();
                    let valor1 = {"valor1":1}
                    let valor2 = {"valor2":2}
                    let valor3 = {"valor3":3}
                    ws.add(valor1)
                    ws.add(valor2)
                    console.log(ws)
                    console.log(ws.has(valor1))
                    console.log(ws.has(valor3))
                    ws.delete(valor2)
                    console.log(ws)
                    ws.add(valor2)
                    ws.add(valor3)
                    console.log(ws)
                    let se=setInterval(()=>console.log(ws),1000)
                    setTimeout(()=>{
                        valor1=null;
                        valor2=null;
                        valor3=null;
                    },5000);
                    clearInterval(se)
            /* const wm = new WeakMap([["nombre","bobby"],["edad",8],["animal","perro"],[null,"nulo"],[undefined,"indefinido"]]); */
                    const wm = new WeakMap()
                    let llave1 = {}
                    let llave2 = {}
                    let llave3 = {}
                    wm.set(llave1,1)
                    wm.set(llave2,2)
                    console.log(wm)
                    console.log(wm.has(llave1))
                    console.log(wm.has(llave3))
                    console.log(wm.get(llave1))
                    console.log(wm.get(llave2))
                    console.log(wm.get(llave3))
                    wm.delete(llave2)
                    console.log(wm)
                    wm.set(llave2)
                    wm.set(llave3)
                    console.log(wm)
                    se=setInterval(()=>console.log(wm),1000)
                    setTimeout(()=>{
                        llave1=null;
                        llave2=null;
                        llave3=null;
                    },5000);
                    clearInterval(se)
                </script>
            </div>
        </div>
    </div>
</body>
</html>