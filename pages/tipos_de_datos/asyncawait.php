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
                function cuadradoPromise(value){
                    if(typeof value !== "number")
                    return Promise.reject(`Error, el valor "${value}" 
                    ingresado no es un número.`)
                    return new Promise((resolve,reject)=>{
                        setTimeout(()=>{
                            resolve({
                                value: value,
                                result:value * value
                            })
                        },0 | Math.random()*1000)
                    })
                }
                async function funcionAsincronaDeclarada(){
                    try{
                        console.log('Inicio Async Función')
                        let obj = await cuadradoPromise(0)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise(1)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise(2)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise("3")
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise(4)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        console.log("Fin de Async Function")
                    }catch(err){
                        console.error(err)
                    }
                }
                funcionAsincronaDeclarada();
                const funcionAsincronaExpresada=async()=>{
                    try{
                        console.log('Inicio Async Función')
                        let obj = await cuadradoPromise(5)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise(6)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise(7)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise("8")
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        obj = await cuadradoPromise(9)
                        console.log(`Async Función: ${obj.value},${obj.result}`)
                        console.log("Fin de Async Function")
                    }catch(err){
                        console.error(err)
                    }
                }
                funcionAsincronaExpresada()
                </script>
            </div>
        </div>
    </div>
</body>
</html>