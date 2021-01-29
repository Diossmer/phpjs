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
                /* estructura de control:
                es el mecanismo que permite controlar el flujo de la programacion
                estructura secuenciales, estructura condicionales, estructuras repetitiva.
                */
                let edad = 17;
                if(edad > 17){
                    console.log("Eres mayor de edad")
                }else{
                    console.log("Eres menor de edad")
                }
                if(edad >= 18){
                    console.log("Eres mayor de edad")
                }else{
                    console.log("Eres menor de edad")
                }
                if(edad < 17){
                    console.log("Eres mayor de edad")
                }else{
                    console.log("Eres menor de edad")
                }
                if(edad <= 17){
                    console.log("Eres mayor de edad")
                }else{
                    console.log("Eres menor de edad")
                }
                /*
                if - else if - else

                Déjame dormir 0hrs-5hrs
                Buenos días 6hrs - 11hrs
                Buenas tardes 12hrs-18hrs
                Buenas noches 19hrs-23hrs
                */
                let hora = 5
                if (hora >= 0 && hora <= 5) {
                    console.log("Déjame dormir")
                }else if(hora >= 6 && hora <= 11){
                    console.log("Buenos días")
                }else if(hora >= 12 && hora <= 18){
                    console.log("Buenas tardes")
                }else{
                    console.log("Buenas noches")
                }

                if (hora < 6) {
                    console.log("Déjame dormir")
                }else if(hora > 5 && hora < 12){
                    console.log("Buenos días")
                }else if(hora > 11 && hora < 19){
                    console.log("Buenas tardes")
                }else{
                    console.log("Buenas noches")
                }
                /* Operador Ternario (condicion)? verdadero: falso */
                console.log("*********OPERADOR TERNARIO**********")
                let eresMayor = (edad >= 18)
                ? "Eres Mayor de edad"
                :"Eres menor de edad";
                console.log(eresMayor);
                /* switch case */
                /*
                Domingo - 0
                Lunes - 1
                Martes - 2
                Miercoles - 3
                Jueves - 4
                Viernes - 5
                Sabado - 6 */
                let dia = 2
                switch (dia) {
                    case 0:
                        console.log("Domingo")
                        break;
                    case 1:
                        console.log("Lunes")
                        break;
                    case 2:
                        console.log("Martes")
                        break;
                    case 3:
                        console.log("Miércoles")
                        break;
                    case 4:
                        console.log("Jueves")
                        break;
                    case 5:
                        console.log("Viernes")
                        break;
                    case 6:
                        console.log("Sabado")
                        break;
                    default:
                        console.log("El día no existe")
                        break;
                }
                </script>
            </div>
        </div>
    </div>
</body>
</html>