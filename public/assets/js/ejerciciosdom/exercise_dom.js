/* MENU */
import hamburgerMenu from "./_menu_hamburguesa.js"
const d = document;
d.addEventListener("DOMContentLoaded", (e) => {
    hamburgerMenu(".panel-btn", ".panel", ".menu a");
});
/* RELOJ */
import {
    digitalClock,
    alarm
} from "./_reloj.js"
d.addEventListener("DOMContentLoaded", (e) => {
    digitalClock("#reloj", "#activar-reloj", "#desactivar-reloj");
    alarm("../../public/assets/sound/alarm.mp3", "#activar-alarma", "#desactivar-alarma")
});
/* TECLADO */
import {
    shortcuts,
    moveBall
} from "./_teclado.js"
d.addEventListener("keydown", (e) => {
    shortcuts(e)
    moveBall(e, ".ball", ".stage")
})
/* CUENTA REGRESIVA */
import countdown from "./_cuenta_regresiva.js"
d.addEventListener("DOMContentLoaded", (e) => {
    countdown("countdown", "Dec 14,2020 05:00:00", "Feliz cumpleaños.🤓")
})
/* BOTON ARRIBA BARRA DE DESPLAZAMIENTO */
import scrollTopButton from "./_boton_scroll.js"
d.addEventListener("DOMContentLoaded", (e) => {
    scrollTopButton(".scroll-top-btn")
})
/* BOTON OSCURO */
import darkTheme from "./_tema_oscuro.js"
darkTheme(".dark-theme-btn", "dark-mode");
/* RESPONSIVE CON JAVASCRIPT */
import responsiveMedia from "./_objeto_responsive.js";
d.addEventListener("DOMContentLoaded", (e) => {
    responsiveMedia("youtube", "(min-width:400px)", `<a href="https://www.youtube.com/watch?v=vs4up_Ibwgw&t=27s" target="__blank">Ver Video</a>`, `<iframe width="560" height="315" src="https://www.youtube.com/embed/vs4up_Ibwgw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`)
    responsiveMedia("gmaps", "(min-width:400px)", `<a href="https://goo.gl/maps/C2gv7WKdGdHpDYMt9" target="_blank">Ver Mapa</a>`, `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d378217.7658993182!2d-8.982267379760705!3d42.218157030597126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd49310fac1a7ee31!2sDEMESIX%20DEALERS%20SOLUTIONS%20SL!5e0!3m2!1ses-419!2sve!4v1603592379530!5m2!1ses-419!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>`)
});
/* RESPONSIVE TESTER */
import responsiveTester from "./_prueba_responsive.js";
d.addEventListener("DOMContentLoaded", (e) => {
    responsiveTester("responsive-tester")
})
/* USER AGENT */
import userDeviceInfo from './_detenccion_dispositivo.js';
d.addEventListener("DOMContentLoaded", (e) => {
    userDeviceInfo("user-device")
})
/* NETWORK RED */
import networkStatus from "./_deteccion_red.js";
networkStatus()
/* WEBCAM */
import webCam from "./_deteccion_webcam.js"
d.addEventListener("DOMContentLoaded", (e) => {
    webCam("webcam")
})
/* GEOLOCALIZACIÓN */
import getGeolocation from "./_geolocalización.js"
d.addEventListener("DOMContentLoaded", (e) => {
    getGeolocation("geolocation")
})
/* SEARCH FILTER */
import searchFilter from "./_filtro_busquedas.js";
d.addEventListener("DOMContentLoaded", (e) => {
    searchFilter(".card-filter", ".card")
})
/* SORTEO DIGITAL */
import draw from "./_sorteo.js"
d.addEventListener("DOMContentLoaded", (e) => {
    draw("#winner-btn", ".player")
})
/* CARRUSEL SLIDER */
import slider from "./_carrusel.js"
d.addEventListener("DOMContentLoaded", (e) => {
    slider();
})
/* SCROLL SPY */
import scrollSpy from "./_scroll_espia.js"
d.addEventListener("DOMContentLoaded", (e) => {
    scrollSpy();
})
/* VIDEO INTELLIGENT */
import smartVideo from "./_video_inteligente.js"
d.addEventListener("DOMContentLoaded", (e) => {
    smartVideo()
})
/* VALIDACIONES DE FORMULARIO */
import contactFormValidations from "./_validaciones_formulario.js"
d.addEventListener("DOMContentLoaded", (e) => {
    contactFormValidations()
})
/* SPEECH DESKTOP */
import speechReader from "./_narrador.js"
speechReader()
/* VOICE RECOGNITION */
import voiceRecognition from "./_reconocimiento_voz.js"
d.addEventListener("DOMContentLoaded", (e) => {
    voiceRecognition()
})
/* FACE RECOGNITION */
import faceRecognition from "./_reconocimiento_facial.js"
d.addEventListener("DOMContentLoaded", (e) => {
    faceRecognition()
})