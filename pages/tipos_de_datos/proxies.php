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
                    //Proxy hace una copia vinculada con el original y poder modificar el original
                    const persona = {
                        nombre:"",
                        apellido:"",
                        edad:0
                    }
                    const manejador = {
                        set(obj,prop,valor){
                            if(Object.keys(obj).indexOf(prop)===-1)
                            return console.error(`La propiedad: "${prop}" no existe en persona`)
                            if((prop==="nombre" || prop==="apellido") && !(/^[A-Za-z\s]+$/g.test(valor)))
                            return console.error(`La propiedad "${prop}", solo acepta letra y espacio en blanco.`)
                            obj[prop]=valor
                        }
                    }
                    const d = new Proxy(persona,manejador)
                    d.nombre="Diossmer"
                    d.apellido="Villamizar"
                    d.edad=25
                    d.facebook="DiossmerVillamizar"
                    console.log(d)
                    console.log(persona)
                </script>
            </div>
        </div>
    </div>
</body>
</html>