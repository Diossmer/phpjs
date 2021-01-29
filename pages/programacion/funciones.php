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
                    //Funcion Declarada
                    function nombreFuncion(){
                        console.log("esta adentro de la funcion")
                    }
                    //invocacion de funcion
                    nombreFuncion()
                    //puedo volver a usar este argumento
                    nombreFuncion()
                    //para devolver cualquier tipo de dato tanto compuesto o primitivo
                    function funcionParaDevolver(){
                        return "devolver el valor tanto entero o cadena de texto"
                    }
                    //para visualizar la retornado de la funcion creamos una variable
                    let muestra = funcionParaDevolver()
                    console.log(muestra)
                    //podemos utilizar funcion dentro de otra
                    function multipleFuncion(){
                        nombreFuncion()
                        return "mostrando valores funciones"
                    }
                    //mostramos con variable
                    let mostrar2 = multipleFuncion()
                    console.log(mostrar2)
                    //funciones para aceptar parametros
                    function saludar(nombre,apellido){
                        console.log(`Hola ${nombre} ${apellido}`)
                    }
                    //mostramos el saludo dandole parametros
                    saludar("Diossmer","Villamizar")
                    //podemos hacer funciones con parametro matemático
                    function suma(numero1,numero2){
                        console.log(numero1+numero2)
                    }
                    suma(3,2)
                    //funciones declaradas VS funciones expresadas
                    funcionDeclarada()
                    function funcionDeclarada(){
                        console.log(`Esto es una funcion declarada`)
                    }
                    funcionDeclarada()
                    //funcion anónima es recomendable usar un const
                    const funcionExpresada = function(){
                        console.log("Esto es una funcion expresada en javascript")
                    }
                    funcionExpresada()
                </script>
            </div>
        </div>
    </div>
</body>
</html>