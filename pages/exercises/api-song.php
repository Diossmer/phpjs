<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador de canciones</title>
    <style>
html{
    font-family: sans-serif;
}
img{
    max-width: 100%;
    height: auto;
}
main{
    display: flex;
    flex-direction: column-reverse;
}
.loader{
    display: none;
    margin: auto;
}
.song blockquote{
    white-space: pre-wrap;
}
@media screen and (min-width:800px){
    main{
        flex-direction: row;
    }
    main>*{
        padding: 1rem;
        flex-basis: 50%;
    }
}
    </style>
</head>
<body>
    <h1>Buscador de canciones</h1>
    <form id="song-search">
        <input type="text" name="artist" placeholder="Nombre del Intérprete" require><br>
        <input type="text" name="song" placeholder="Nombre del Canción" require><br>
        <input type="submit">
    </form>
    <img class="loader" src="../../public/assets/svg/puff.svg" alt="Cargando...">
    <aside class="error"></aside>
    <main>
        <article class="artist"></article>
        <article class="song"></article>
    </main>
<script src="../../public/assets/js/ejercicio_apis/api-song.js"></script>
</body>
</html>