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
                    let a = new String("hola")
                    console.log(a)

                    const b = {}
                    console.log(b)

                    const c = new Object();
                    console.log(c)

                    const d = {
                        propiedad:"valor",
                        "dato":["Venezolano","Diossmer",26],
                        soltero:true,
                        "contacto":{
                            "telefono":{
                                telefono1:"+58 212 412 34 24",
                                telefono2:NaN
                                },
                            rrss:"www.dv1993.com",
                        },
                        sangre:{
                            tipo:["-A",
                            "-O",
                            "H",
                            "-H"]
                            },
                        familia:{
                            nombre:{
                                padre:"Eduardo",
                                madre:"Nancy"
                                }
                        },
                        saludar:function(){
                            console.log("Hola mundo!")
                        },
                        decirMiNombre:function(){
                            console.log(`Hola me llamo ${this.dato[1]}`)
                        }
                    }
                    console.log(d)
                    console.log(d["propiedad"])
                    console.log(d["dato"][0])
                    console.log(d.soltero)
                    console.log(d["contacto"]["telefono"]["telefono1"])
                    console.log(d.sangre.tipo[0])
                    console.log(d.familia.nombre.padre)
                    console.log(d.saludar())
                    console.log(d.decirMiNombre())
                    console.log(Object.keys(d))
                    console.log(Object.values(d))
                    console.log(d.hasOwnProperty("dato"))
                    console.log(d.hasOwnProperty("edad"))
                </script>
            </div>
        </div>
    </div>
</body>
</html>