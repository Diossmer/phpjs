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
            <a href="https://cdnjs.com/">CDNJS</a> <br>
            </div>
            <script>
                /* function Anonima Autoejeutable */
                (function(){})();

                (function(){
                    console.log("Mi primer IIFE")
                })();
                (function(d,w,c){
                    console.log("Mi segunda IIFE")
                    console.log(d)
                    console.log(w)
                    console.log(c)
                    c.log("este es un console.log()")
                })(document,window,console);

                //Forma de escribir la funciones Anónimas Autoejecutables
                // clásica
                (function(){
                    console.log("versión Clásica.")
                })();
                //La Crockford (javascript the Good Parts)
                ((function(){
                    console.log("versión Crockford.")
                })());
                //unaría
                +function(){
                    console.log("version Unaría.")
                }();
                //facebook
                !function(){
                    console.log("version Facebook")
                }();
            </script>
        </div>
    </div>
</body>
</html>