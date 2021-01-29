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
                    console.log(this)
                    console.log(window)
                    console.log(window===this)
                    this.nombre="Contexto Global"
                    console.log(this.nombre)
                    function imprimir(){
                        console.log(this.nombre)
                    }
                    imprimir()
                    const obj={
                        nombre:"Contexto Objeto",
                        imprimir(){
                            console.log(this.nombre)
                        }
                    }
                    obj.imprimir()
                    const obj2 = {
                        nombre:"Contexto Objeto 2",
                        imprimir
                    }
                    obj2.imprimir()
                    const obj3={
                        nombre:"Contexto Objeto 3",
                        imprimir:()=>{
                            console.log(this.nombre)
                        }
                    }
                    obj3.imprimir()
                    function Persona(nombre){
                        const that=this;
                        this.nombre = nombre;
                        that.nombre = nombre;
                        // return console.log(this.nombre)
                        /* return function(){console.log(this.nombre,2)} */
                        // return()=>console.log(this.nombre,3)
                        return function(){console.log(that.nombre,3)}
                    }
                    let dios = new Persona("Diossmer")
                    dios()
                </script>
            </div>
        </div>
    </div>
</body>
</html>