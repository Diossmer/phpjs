<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémons</title>
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
    <h1>Pokémons</h1>
    <main class="grid-fluid"></main>
    <nav class="links"></nav>
    <script src="../../public/assets/js/ejercicio_apis/api_pokemon.js"></script>
</body>
</html>