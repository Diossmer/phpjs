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
                    /* callback: todo lo que funciona paso a paso tenga un control en la tarea
                    http://www.callbackhell.com */
                function cuadradoCallback(value,callback){
                    setTimeout(()=>{
                        callback(value,value*value);
                    },0|Math.random()*1000)
                }
                cuadradoCallback(0,(value,result)=>{
                    console.log(`Inicia Callback`)
                    console.log(`Callback: ${value}, ${result}`)
                    cuadradoCallback(1,(value,result)=>{
                        console.log(`Inicia Callback`)
                        console.log(`Callback: ${value}, ${result}`)
                        cuadradoCallback(2,(value,result)=>{
                            console.log(`Inicia Callback`)
                            console.log(`Callback: ${value}, ${result}`)
                            cuadradoCallback(2,(value,result)=>{
                                console.log(`Inicia Callback`)
                                console.log(`Callback HELL!!! \nhttp://www.callbackhell.com`)
                            });
                        });
                    });
                });
                </script>
            </div>
        </div>
    </div>
</body>
</html>