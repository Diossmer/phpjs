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
                    const numeros = [1,2,3,4,5,6,7,8,9,0]
                    for(let i = 0; i < numeros.length;i++){
                        const element = numeros[i]
                        console.log(element)
                    }

                    for(let i = 0; i < numeros.length;i++){
                        if(i === 5){
                            break
                        }
                        console.log("break "+numeros[i])
                    }

                    for(let i = 0; i < numeros.length;i++){
                        if(i === 5){
                            continue
                        }
                        console.log("continue "+numeros[i])
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>