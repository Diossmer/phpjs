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
                    /*
                    Call: recibe un objeto
                    Apply: recibe un Arreglo
                    Bind: enlaza cualquier
                    */
                    console.log(this)
                    this.lugar="Contexto Global"
                    function saludar(saludo,aQuien){
                        console.log(`${saludo} ${aQuien} desde el ${this.lugar}`);
                    }
                    saludar("Hola","kEnAi")
                    const obj={
                        lugar:"Contexto Objeto"
                    }
                    saludar.call(obj,"Hola","Diossmer")
                    saludar.call(null,"Hola","Diossmer")
                    saludar.call(this,"Hola","Diossmer")
                    saludar.apply(obj,["Adios","Kenai"])
                    saludar.apply(null,["Adios","Kenai"])
                    saludar.apply(this,["Adios","Kenai"])
                    this.nombre="window"
                    const persona ={
                        nombre:"Diossmer",
                        saludar(){
                            console.log(`Hola ${this.nombre}`)
                        }
                    }
                    persona.saludar()
                    const otraPersona={
                        saludar:persona.saludar.bind(persona),
                        saludar:persona.saludar.bind(this)
                    }
                    otraPersona.saludar()
                </script>
            </div>
        </div>
    </div>
</body>
</html>