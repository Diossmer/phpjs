<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wordpress REST API</title>
    <link rel="stylesheet" href="../../public/assets/css/source/themes/wordpress.css">
</head>
<body>
    <h1>Wordpress REST API</h1>
    <article id="site" class="site"></article>
    <section id="posts" class="posts"></section>
    <img src="../../public/assets/svg/puff.svg" alt="Cargando..." class="loader">
    <template id="post-template">
        <article class="post">
            <img src="" alt="" class="post-image">
            <aside>
                <h2 class="post-title"></h2>
                <figure class="post-author"></figure>
                <small class="post-date"></small>
                <a class="post-link" target="_blank">Ver publicación original</a>
                <p class="post-excerpt"></p>
                <div class="post-categories"></div>
                <div class="post-tags"></div>
                <details class="post-content">
                    <summary>Ver contenido de la publicación</summary>
                    <article></article>
                </details>
            </aside>
        </article>
        <hr>
    </template>
<script src="../../public/assets/js/ejercicio_apis/wordpress.js"></script>
</body>
</html>