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
                Procesamiento Single thread y Multi thread.
                Son la unidades basica de cada proceso realiza en cada maquina de un solo hilo o multi hilo.
                piden trigger(mensaje) y por cada ciclo va pilando la tarea de forma sincrona o asincrona la tarea y
                se ejecuta en la ultima en entrar es la primera en salir.
                Operaciones de CPU y Operaciones 1/0
                Operaciones de CPU: Son la que pasa el mayor tiempo consumiendo los procesos de nuestra CPU (loop)
                Operaciones de INPUT/OUTPUT: Son los pasa el mayor el tiempo esperando la petición del recurso solicitado
                Operaciones Concurrentes y Paralelas
                Concurrencia: son dos o mas tarea "Progresan" al mismo tiempo o simultaneamente
                Paralelismo: Son dos o mas tarea se "ejecuta" al mismo tiempo
                Operaciones Bloqueantes y No Bloqueantes
                Operaciones Bloqueantes: Es aquella que no va devolver el control a la aplicación hasta que no a ya terminado
                toda su tarea
                Operaciones No Bloqueantes: operaciones se ejecutan y devuelven inmediatamente al hilo principal no importando
                o no la tarea
                Operaciones Síncronas y Asíncronas
                Síncronas: la respuesta en tiempo presente y sigue la operación continuamente
                Asíncronas: la respuesta en tiempo va esperar el resultado en un futuro y no espera respuesta de resultado
                ----Javascript usa un modelo asíncrono y no bloqueante con un loop de eventos implementado en un 
                sólo hilo(single thread), para operaciones de entrada y salida(inout/output).
                Teoria en javascript:
                * Last in first out
                * Herramienta Loupe http://latentflip.com/loupe/
                */
                /* Código Síncrono Bloqueante */
                (()=>{
                    console.log(`Código Síncrono`);
                    console.log(`Inicio`);
                    function dos(){
                        console.log(`Dos`);
                    }
                    function uno(){
                        console.log(`Uno`);
                        dos()
                        console.log(`Tres`);
                    }
                    uno();
                    console.log(`Fin`)
                })();
                /* Código Asíncrono No Bloqueante */
                (()=>{
                    console.log(`Código Asíncrono`);
                    console.log(`Inicio`);
                    function dos(){
                        setTimeout(function(){
                            console.log(`Dos`);
                        },1000);
                    }
                    function uno(){
                        setTimeout(function(){
                            console.log(`Uno`);
                        },0);
                        dos()
                        console.log(`Tres`);
                    }
                    uno();
                    console.log(`Fin`)
                })();
                </script>
            </div>
        </div>
    </div>
</body>
</html>