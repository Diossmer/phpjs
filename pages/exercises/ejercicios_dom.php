<!DOCTYPE html>
<html lang="es" data-dark>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido - Javascript</title>
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/hamburgersCSS.css">
    <link rel="stylesheet" type="text/css" href="../../public/assets/css/style_dom.css">
    <script src="" type="text/javascript"></script>
</head>

<body data-dark>
    <header class="header">
        <h1>Ejercicios del DOM</h1>
    </header>
    <button class="panel-btn hamburger hamburger--collapse" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>
    <aside class="panel">
        <nav class="menu">
            <a href="#seccion1" data-scroll-spy>Reloj Digial y Alarma Sonora</a>
            <a href="#seccion2" data-scroll-spy>Evento del Teclado</a>
            <a href="#seccion3" data-scroll-spy>Cuenta Regresiva</a>
            <a href="#seccion4" data-scroll-spy>Responsive con JavaScript</a>
            <a href="#seccion5" data-scroll-spy>Responsive Tester</a>
            <a href="#seccion6" data-scroll-spy>Detección de Dispositivo (USER AGENT)</a>
            <a href="#seccion7" data-scroll-spy>Detección de la Conexión</a>
            <a href="#seccion8" data-scroll-spy>Detencción de la cámara web</a>
            <a href="#seccion9" data-scroll-spy>Geolocalización</a>
            <a href="#seccion10" data-scroll-spy>Filtros de Búsquedas</a>
            <a href="#seccion11" data-scroll-spy>Sorteo Digital</a>
            <a href="#seccion12" data-scroll-spy>Responsive Slider</a>
            <a href="#seccion13" data-scroll-spy>Video Ineligente</a>
            <a href="#seccion14" data-scroll-spy>Validaciones de Formulario</a>
            <a href="#seccion15" data-scroll-spy>Narrador</a>
            <a href="#seccion16" data-scroll-spy>Reconocimiento de voz</a>
            <a href="#seccion17" data-scroll-spy>Reconocimiento facial</a>
        </nav>
    </aside>
    <main>
        <section id="seccion1" class="section" data-scroll-spy>
            <h2>Reloj Digial y Alarma Sonora</h2>
            <div id="reloj"></div>
            <div>
                <button id="activar-reloj">Activar Reloj</button>
                <button id="desactivar-reloj">Desactivar Reloj</button>
                <button id="activar-alarma">Activar Alarma</button>
                <button id="desactivar-alarma">Desactivar Alarma</button>
            </div>
        </section>
        <section id="seccion2" class="section" data-scroll-spy>
            <h2>Evento del Teclado</h2>
            <article class="stage">
                <div class="ball"></div>
            </article>
        </section>
        <section id="seccion3" class="section" data-scroll-spy>
            <h2>Cuenta Regresiva</h2>
            <div id="countdown"></div>
        </section>
        <section id="seccion4" class="section" data-scroll-spy>
            <h2>Responsive con JavaScript</h2>
            <div id="youtube"></div>
            <div id="gmaps"></div>
        </section>
        <section id="seccion5" class="section" data-scroll-spy>
            <h2>Responsive Tester</h2>
            <form id="responsive-tester">
                <input type="url" name="direccion" placeholder="URL" required>
                <br>
                <input type="text" name="ancho" placeholder="Ancho" required>
                <br>
                <input type="text" name="alto" placeholder="Alto" required>
                <br>
                <input type="submit" value="Probar" name="probar">
                <input type="button" value="Cerrar" name="cerrar">
            </form>
        </section>
        <section id="seccion6" class="section" data-scroll-spy>
            <h2>Detección de Dispositivo <br>(USER AGENT)</h2>
            <div id="user-device"></div>
        </section>
        <section id="seccion7" class="section" data-scroll-spy>
            <h2>Detencción de la Conexión</h2>
        </section>
        <section id="seccion8" class="section" data-scroll-spy>
            <h2>Detencción de la cámara web</h2>
            <video id="webcam"></video>
        </section>
        <section id="seccion9" class="section" data-scroll-spy>
            <h2>Geolocalización</h2>
            <div id="geolocation"></div>
        </section>
        <section id="seccion10" class="section" data-scroll-spy>
            <h2>Filtros de Búsquedas</h2>
            <input type="search" placeholder="Buscar..." class="card-filter">
            <article class="cards">
                <figure class="card">
                    <img src="https://placeimg.com/200/200/tech" alt="Tech">
                    <figcaption>Tech</figcaption>
                </figure>
                <figure class="card">
                    <img src="https://placeimg.com/200/200/animals" alt="Animals">
                    <figcaption>Animals</figcaption>
                </figure>
                <figure class="card">
                    <img src="https://placeimg.com/200/200/people" alt="People">
                    <figcaption>People</figcaption>
                </figure>
                <figure class="card">
                    <img src="https://placeimg.com/200/200/arch" alt="Arch">
                    <figcaption>Arch</figcaption>
                </figure>
                <figure class="card">
                    <img src="https://placeimg.com/200/200/nature" alt="Nature">
                    <figcaption>Nature</figcaption>
                </figure>
                <figure class="card">
                    <img src="https://placeimg.com/200/200/any" alt="Any">
                    <figcaption>Any</figcaption>
                </figure>
            </article>
        </section>
        <section id="seccion11" class="section" data-scroll-spy>
            <h2>Sorteo Digital</h2>
            <ul class="players">
                <li class="player">JavaScript</li>
                <li class="player">PHP</li>
                <li class="player">JAVa</li>
                <li class="player">C</li>
                <li class="player">Python</li>
                <li class="player">Ruby</li>
                <li class="player">Go</li>
                <li class="player">Visual Basic</li>
                <li class="player">Rust</li>
                <li class="player">Perl</li>
            </ul>
            <button id="winner-btn">Obtener Ganador</button>
        </section>
        <section id="seccion12" class="section" data-scroll-spy>
            <h2>Responsive Slider</h2>
            <div class="slider">
                <div class="slider-slides">
                    <div class="slider-slide active">
                        <img src="https://placeimg.com/400/400/animals" alt="animals">
                    </div>
                    <div class="slider-slide">
                        <h4>Diapositiva 2</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas aperiam repudiandae soluta magni at,
                            aut incidunt vitae suscipit necessitatibus totam, blanditiis, natus laboriosam optio quam veritatis
                            quisquam nostrum voluptatem ipsum.</p>
                    </div>
                    <div class="slider-slide">
                        <img src="https://placeimg.com/400/400/nature" alt="nature">
                    </div>
                    <div class="slider-slide">
                        <h4>Diapositiva 4</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas aperiam repudiandae soluta magni at,
                            aut incidunt vitae suscipit necessitatibus totam, blanditiis, natus laboriosam optio quam veritatis
                            quisquam nostrum voluptatem ipsum.</p>
                    </div>
                </div>
                <div class="slider-btns">
                    <a class="prev" href="#">&laquo;</a>
                    <a class="next" href="#">&raquo;</a>
                </div>
            </div>
        </section>
        <section id="seccion13" class="section" data-scroll-spy>
            <h2>Video Ineligente</h2>
            <video src="../../public/assets/video/AJAX_1.mp4" controls muted loop autoplay data-smart-video></video>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <video src="../../public/assets/video/AJAX_1.mp4" controls muted loop autoplay data-smart-video></video>
        </section>
        <section id="seccion14" class="section" data-scroll-spy>
            <h2>Validaciones de Formulario</h2>
            <form class="contact-form" action="https://formsubmit.co/diossmer@gmail.com" method="POST" target="__blank">
                <legend>Envíanos tus comentarios</legend>
                <input type="text" name="name" id="" placeholder="Escribe tu nombre" pattern="[A-Za-zÄÁáËÉéÏÍíÖÓóÜÚú\s]+$" title="Nombre Sólo acepta letras y espacios en blanco" required>
                <input type="email" name="email" id="" placeholder="Escribe tu email" title="Email incorrecto" pattern="^[A-Za-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$" required>
                <input type="text" name="subject" id="" placeholder="Asunto a tratar" title="El Asunto es requerido" required>
                <textarea name="comments" cols="50" rows="5" id="" placeholder="Escribe tus comentarios" data-pattern="^.{1,255}$" title="Tu comentario no debe exceder los 255 caracteres" required></textarea>
                <input type="submit" value="Enviar">
                <div class="contact-form-loader none">
                    <img src="../../public/assets/svg/puff.svg" alt="Cargando">
                </div>
                <div class="contact-form-response none">
                    <p>Los datos han sido enviados</p>
                </div>
            </form>
        </section>
        <section id="seccion15" class="section" data-scroll-spy>
            <h2>Narrador</h2>
            <select id="speech-select">
                <option value="">---Elige una Voz---</option>
            </select>
            <br><br>
            <textarea id="speech-text" cols="50" rows="10" placeholder="Ingresa texto para leer"></textarea>
            <br><br>
            <button id="speech-btn">Leer Texto</button>
        </section>
        <section id="seccion16" class="section" data-scroll-spy>
            <h2>Reconocimiento de voz</h2>
            <div id="voice-receiver"></div>
            <button id="voice-emitter">Emisor de voz</button>
        </section>
        <section id="seccion17" class="section" data-scroll-spy>
            <script src="../../public/assets/js/face-api/dist/face-api.js"></script>
            <h2>Reconocimiento facial</h2>
            <video id="video" width="720" height="560" autoplay muted></video>
        </section>
    </main>
    <button class="scroll-top-btn hidden">&#11014;</button>
    <button class="dark-theme-btn">🌑</button>
    <script src="../../public/assets/js/ejerciciosdom/exercise_dom.js" type="module"></script>
</body>

</html>
