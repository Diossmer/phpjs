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
                    //http://www.json.org/json-es.html
                    const json = {
                        cadena:"Diossmer",
                        numero:35,
                        booleano:true,
                        arreglo:["correr","programar","cocinar"],
                        objeto:{
                            twitter:"@jonmircha",
                            email:"jonmircha@gmail.com"
                        },
                        nulo:null
                    }
                    console.log(json);
                    console.log(JSON);
                    /*
                    parse: ƒ parse() -> analizar una notación de cadena de texto
                    y la va convertir un tipo de dato que javascript validé,
                    "tiene que ser en la misma línea".
                    stringify: ƒ stringify() -> convierte un objeto valor de javascript
                    en una cadena de texto JSON, Opcionalmente reemplazar valores si se
                    indica una función de reemplazo, o si se especifican las propiedades
                    mediane un array de reemplazo.
                     */
                    console.log("{}");
                    console.log("[1,2,3]");
                    console.log(JSON.parse("{}"));
                    console.log(JSON.parse("[1,2,3]"));
                    console.log(JSON.parse(true));
                    console.log(JSON.parse(20));
                    console.log(JSON.parse(null));
                    console.log(JSON.parse("null"));
                    console.log(JSON.parse('"Hola Mundo"'));
                    // console.log(JSON.parse("Error"));
                    // console.log(JSON.parse(undefined));
                    console.log(JSON.stringify({}));
                    console.log(JSON.stringify([1,2,3]));
                    console.log(JSON.stringify(true));
                    console.log(JSON.stringify(null));
                    console.log(JSON.stringify(undefined));
                    console.log(JSON.stringify({x:2,y:3}));
                    console.log(JSON.stringify(json));
                    console.log(JSON.parse(
                    '{"cadena":"Diossmer","numero":35,"booleano":true,"arreglo":["correr","programar","cocinar"],"objeto":{"twitter":"@jonmircha","email":"jonmircha@gmail.com"},"nulo":null}'));
                </script>
            </div>
        </div>
    </div>
</body>
</html>