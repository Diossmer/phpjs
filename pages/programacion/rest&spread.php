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
                    // PARAMETRO REST (...A)
                    function sumar(a,b,...c){
                        let resultado = a+b;
                        c.forEach(function(n){
                            resultado +=n
                        })
                        return resultado;
                    }
                    console.log(sumar(1,2))
                    console.log(sumar(1,2,3))
                    console.log(sumar(1,2,3,4))
                    console.log(sumar(1,2,3,4,5))
                    // OPERADOR SPREAD
                    const arr1 = [1,2,3,4,5],
                    arr2=[6,7,8,9,0]
                    console.log(arr1,arr2)
                    const arr3 = [arr1,arr2]
                    console.log(arr3)
                    const arr4 = [...arr1,...arr2]
                    console.log(arr4,arr4[2])
                </script>
            </div>
        </div>
    </div>
</body>
</html>