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
                <p><a href="https://www.momentjs.com">MOMENT.JS</a></p>
                <script>
                    //Date es un constructor
                    console.log(Date())
                    let fecha = new Date()
                    console.log(fecha)
                    //dia del mes
                    console.log(fecha.getDate())
                    //dia de la semana D L M Mi J V S -> 0-1-2-3-4-5-6
                    console.log(fecha.getDay())
                    //dia del mes Ene Feb Mar Abr May Jun Jul Ago Sep Oct Nov Dic -> 0-1-2-3-4-5-6-7-8-9-10-11
                    console.log(fecha.getMonth())
                    //años
                    console.log(fecha.getYear(),2020-1900) // no es recomendable usarlo
                    console.log(fecha.getFullYear())
                    //hora
                    console.log(fecha.getHours())
                    //minutos
                    console.log(fecha.getMinutes())
                    //segudos
                    console.log(fecha.getSeconds())
                    //milisegundos
                    console.log(fecha.getMilliseconds())
                    console.log(fecha.toString())
                    console.log(fecha.toDateString())
                    console.log(fecha.toLocaleString())
                    console.log(fecha.toLocaleDateString())
                    console.log(fecha.toLocaleTimeString())
                    console.log(fecha.getTimezoneOffset())
                    console.log(fecha.getUTCDate())
                    console.log(fecha.getUTCHours())
                    console.log(Date.now())
                    let cumpledio=new Date(1993,11,14,10,00,45)
                    console.log(cumpledio)
                    console.log(Date.parse("dec 14, 1993 10:00:22 Am"))
                </script>
            </div>
        </div>
    </div>
</body>
</html>