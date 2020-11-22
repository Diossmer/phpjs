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
                    // propiedades primitiva privadas Symbols()
                    let id = Symbol("id")
                    let id2 = Symbol("id2")
                    console.log(id === id2)
                    console.log(id, id2)
                    console.log(typeof id, typeof id2)

                    const NOMBRE = Symbol("Nombre")
                    const SALUDAR=Symbol("Saludar")
                    const persona={
                        [NOMBRE]:"Diossmer",
                        edad:26,
                        civil: "Soltero"
                    }
                    console.log(persona)
                    persona.NOMBRE="Diossmer Villamizar"
                    console.log(persona)
                    console.log(persona.NOMBRE)
                    console.log(persona[NOMBRE])
                    persona[SALUDAR]=()=>{
                        console.log("Hola")
                    }
                    console.log(persona)
                    persona[SALUDAR]()
                    for(let propiedad in persona ){
                        console.log(propiedad)
                        console.log(persona[propiedad])
                    }
                    console.log(Object.getOwnPropertySymbols(persona))
                </script>
            </div>
        </div>
    </div>
</body>
</html>