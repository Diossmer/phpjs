<?php
//Manipulación con el servidor
require 'database/conection.php'; //requiere ("conection.php");
include 'database/main.php'; //incluir ("conection.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/dist/main.css">
    <title>Contenido - Javascript</title>
    <script src="" type="text/javascript"></script>
</head>
<body>
    <div class="wrap">
        <header class="header">
            <div class="header_contenido">
                <nav class="navegation">
                    <ul class="list_navegation">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">¿Quienes Somos?</a></li>
                        <li><a href="#">contactos</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="contenido">
            <div class="info">
                Javascript siempre trabaja con prototipo <br>
                en Ecmascript 6 existe azucar sintácticos <br>
                para realizar comodida en POO
            </div>
            <h1 class="titulo">Contenido Javascript <span class="tutorial">TUTORIAL</span></h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/programacion/variables.php">Variables de JavaScript</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/constantes.php">Constantes de JavaScript</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/cadenadetexto.php">Cadena de Texto</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/templatestring.php">Template String</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/numero.php">Números</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/booleano.php">Booleanos</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/undenullnan.php">undefined, null & NaN</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/funciones.php">Funciones</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/arreglo.php">Arreglos</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/objeto.php">Objeto</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/tipodeoperacion.php">Tipo de operaciones</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/condicionales.php">Condicionales</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/ciclos.php">Ciclos</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/manejoerror.php">Manejo de errores</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/controldeflujo.php">Control de fllujo</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/destructuracion.php">Destructuración o Destructuring</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/objetosliterales.php">Objetos literales</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/rest&spread.php">Parametros Rest y Operador Spread</a></li>
                <li class="menu_contenido-web"><a href="pages/programacion/arrowfunction.php">Arrow function</a></li>
            </ul>
            <h1 class="titulo">POO => PROGRAMACION ORIENTADA A OBJETO</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/poo/prototipos.php">Prototipos</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/herenciaproto.php">Herencia de los prototipos</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/clasesyherencia.php">Clases y Herencia</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/gettersetter.php">Métodos estáticos, Getters y setters</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/objetoconsole.php">Objeto de Console</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/objetodate.php">Objeto de Date</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/objetomath.php">Objeto dem Math</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/cortocircuito.php">Operador de cortocircuito</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/alertconfirmprom.php">Alert Confirm y Prompt</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/expresionregular.php">Expresiones Regulares</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/funcionesanonima.php">Funciones Anónima Autoejecutable</a></li>
                <li class="menu_contenido-web"><a href="pages/poo/importexport.php">Módulos(import/export)</a></li>
            </ul>
            <h1 class="titulo">Tipo de datos y Temporizadores</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/temporizadores.php">Temporizadores setTimeout & setInterval</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/asincroniaevent.php">Asincronía y el Event Loop</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/callbacks.php">Call Back</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/promesas.php">Promesas</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/asyncawait.php">Async - Await</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/symbols.php">Symbols</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/sets.php">Sets</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/maps.php">Maps</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/WeakSetsMaps.php">WeakSets & WeakMaps</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/iterableiterators.php">Iterables & Iterators</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/generators.php">Generadores de iteradores</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/proxies.php">Proxies</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/dinamicaobjetos.php">Propiedades Dinámicas de los Objetos</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/this.php">this Tipo de datos</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/cab.php">Call,Apply y Bind</a></li>
                <li class="menu_contenido-web"><a href="pages/tipos_de_datos/json.php">JSON</a></li>
            </ul>
            <h1 class="titulo">DOM - Document Object Model</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/dom/webapis.php">WEB APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/introduccion.php">Introducción</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/nodelemenselect.php">Nodos, Elementos y Selectores</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/atributosdata.php">Atributos y Data-Attributes</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/variablescss.php">Estilos y Variables CSS</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/clasescss.php">Clases CSS</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/texthtml.php">Texto y HTML</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/recorriendodom.php">Traversing: Recorriendo el DOM</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/crearelemfrag.php">Creando Elementos y Fragmentos</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/templateshtml.php">Templates HTML</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/oldstyle.php">Modificando Elementos (Old Style)</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/modificelement.php">Modificando Elementos</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/manejarevent.php">Manejadores de Eventos</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/epre.php">Eventos con Parámetros y Remover Eventos</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/flujoevent.php">Flujo de Eventos (Burbuja y Captura)</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/stopprevent.php">stopPropagation & preventDefault</a></li>
                <li class="menu_contenido-web"><a href="pages/dom/delegevent.php">Delegación de Eventos</a></li>
            </ul>
            <h1 class="titulo">BOM - Browser Object Model</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/bom/prop&event.php">Propiedades y Eventos</a></li>
                <li class="menu_contenido-web"><a href="pages/bom/metodos.php">Métodos</a></li>
                <li class="menu_contenido-web"><a href="pages/bom/urlHisna.php">Objetos: URL, Historial y Navegador</a></li>
            </ul>
            <h1 class="titulo">AJAX - Asynchronous Javascript & XML</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/ajax/introduccion.php">Introducción</a></li>
                <li class="menu_contenido-web"><a href="pages/ajax/obtxhmlhttprequest.php">Objeto XMLHttpRequest</a></li>
                <li class="menu_contenido-web"><a href="pages/ajax/apifetch.php">API Fetch</a></li>
                <li class="menu_contenido-web"><a href="pages/ajax/asyncawait.php"> API Fetch + Async-Await</a></li>
                <li class="menu_contenido-web"><a href="pages/ajax/libreriaax.php">Librería Axios</a></li>
                <li class="menu_contenido-web"><a href="pages/ajax/libreriaaxasawait.php">Librería Axios + Async-Await</a></li>
            </ul>
            <h1 class="titulo">API REST</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/api_rest/introduccion.php">Introducción</a></li>
                <li class="menu_contenido-web"><a href="pages/api_rest/jsonserver.php">JSON server - API falsa local</a></li>
                <li class="menu_contenido-web"><a href="pages/api_rest/clienterest.php">Consumo de datos con cliente REST</a></li>
            </ul>
            <h1 class="titulo">C.R.U.D - CREATE-READ-UPDATE-DELETE</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/crud_ajax/crudajax.php">API REST: CRUD con AJAX</a></li>
                <li class="menu_contenido-web"><a href="pages/crud_ajax/crudfetch.php">API REST: CRUD con Fetch</a></li>
                <li class="menu_contenido-web"><a href="pages/crud_ajax/crudaxios.php">API REST: CRUD con Axios</a></li>
            </ul>
            <h1 class="titulo">S.P.A - Single Page Applications</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/spa/index.php">Single Page Applications: Estructura de Proyecto</a></li>
            </ul>
            <h1 class="titulo">Ejercicios</h1>
            <ul class="menu_contenido">
                <li class="menu_contenido-web"><a href="pages/exercises/ejercicios.php">Lenguaje de Programación</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/ejercicios_dom.php">Lenguaje de Programación DOM</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/sitio-ajax.php">Lenguaje de Programación AJAX-APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/incluir-ajax.php">Lenguaje de Programación Incluir HTML AJAX-APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/uploader.php">Lenguaje de Programación Uploader AJAX-APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/uploader-drag-and-drop.php">Lenguaje de Programación Uploader Drag & Drop AJAX-APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/contact-form.php">Lenguaje de Programación Envio Formulario con Fecth AJAX-APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/contact-form2.php">Lenguaje de Programación Email PHP con Fecth AJAX-APIs</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/stripe-checkout.php">Checkout con Stripe</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/blog-markdown.php">Blog con Markdown</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/api_pokemon.php">Pokémon con Fetch</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/api-tv-show.php">Buscador de Shows con Fetch</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/api-song.php">Buscador de Canciones con Fetch</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/select-anidado.php">Select anidado con Fetch</a></li>
                <li class="menu_contenido-web"><a href="pages/exercises/wordpress.php">Wordpress con Fetch</a></li>
            </ul>
            <div class="pendiente">
                <h1 class="titulo">Temas pendientes o faltantes</h1>
                <ul type="disc">
                    <li>caracteres especiales</li>
                    <li>Json Token</li>
                    <li>WebSocket</li>
		    <li>PWAs</li>
		    <li>webpack</li>
                    <li class="menu_contenido-web"><a href="pages/template.php">Plantilla(texto)</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src=""></script>
</body>
</html>
