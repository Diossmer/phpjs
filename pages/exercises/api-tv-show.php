<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de Shows de TV</title>
    <style>
html{
    text-align: center;
}
.grid-fluid{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
    text-align: center;
}
.loader{
    display: block;
    margin: auto;
}
    </style>
</head>
<body>
    <h1>Buscador de Shows de TV</h1>
    <input type="search" name="search" id="search" placeholder="Buscar shows de tv..." autocomplete="off">
    <section id="shows" class="grid-fluid"></section>
    <template id="show-template">
        <article class="show">
            <h3></h3>
            <div></div>
            <img>
            <a></a>
        </article>
    </template>
<script src="../../public/assets/js/ejercicio_apis/api-tv-show.js"></script>
</body>
</html>