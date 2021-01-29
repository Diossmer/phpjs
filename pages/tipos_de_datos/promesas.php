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
                    if(typeof value !== "number")return Promise.reject(`Error, el valor "${value}" ingresado no es un número.`)
                    return new Promise((resolve,reject)=>{
                        setTimeout(()=>{
                            resolve({
                                value: value,
                                result:value * value
                            })
                        },0 | Math.random()*1000)
                    })
                }
                cuadradoPromise(0)
                .then((obj)=>{
                    console.log(`Promise: ${obj.value},${obj.result}`)
                    return cuadradoPromise(1);
                })
                .then(obj=>{
                    console.log(`Promise: ${obj.value},${obj.result}`)
                    return cuadradoPromise("2")
                })
                .then((obj)=>{
                    console.log(`Promise: ${obj.value},${obj.result}`)
                    return cuadradoPromise(3);
                })
                .then((obj)=>{
                    console.log(`Promise: ${obj.value},${obj.result}`)
                    console.log(`Fin Promise`)
                })
                .catch(err => console.log("MIRA !!! "+err));
                </script>
            </div>
        </div>
    </div>
</body>
</html>