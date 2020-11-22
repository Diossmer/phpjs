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
            <a href="https://es.wikipedia.org/wiki/Expresi%C3%B3n_regular" title="Expresión regular wikipedia">Expresión regular</a> <br>
            <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Guide/Regular_Expressions">Expresiones regulares</a><br>
            <a href="https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/RegExp">RegExp</a> <br>
            <a href="https://docs.microsoft.com/es-es/dotnet/standard/base-types/regular-expression-language-quick-reference?redirectedfrom=MSDN">Referencia rápida</a> <br>
            <a href="https://regexone.com/">Lesson 1: An Introduction, and the ABCs</a><br>
            <p>Aplicacion Online:</p>
            <a href="https://regexr.com/">expresiones regulares regexr</a><br>
            <a href="https://regex101.com/">expresiones regulares regex101</a></div><br>
            <script>
                /*
                Expresiones Regulares:
                Es una secuencia de caracteres que forma un patron de busqueda, principalmente es
                utilizada para la busqueda de patrones de cadenas de caracteres.
                */
                let cadena = "Lorem Lorem Lorem Lorem ahora con mas lorem en minuscula separados lorem lorem lorem lorem ahora juntos mayuscula LoremLoremLoremLorem ahora junto en minuscula loremloremloremlorem... ahora en caracteres L L L L -> l l l l -> LLLL -> llll..."
                /* let expReg = new RegExp("lorem","ig")
                console.log(expReg.test(cadena))
                console.log(expReg.exec(cadena)) */
                // let RegExp2 = /\d/ig
                // let RegExp2 = /[0-9]/ig
                /* let RegExp2 = /Lorem{1}/g // cuanto Lorem aparecen en la cadena de caracteres */
                /* let RegExp2 = /Lorem{2}/g //Error porque en cadena de caracteres no busca palabra */
                /* let RegExp2 = /L{2}/g // cuanto letra hay juntas */
                let RegExp2 = /L{3,4}/ //ahora buscar entre {1 letra,2 obtener} de caracteres
                console.log(RegExp2)
                console.log(RegExp2.test(cadena))
                console.log(RegExp2.exec(cadena))
            </script>
        </div>
    </div>
</body>
</html>