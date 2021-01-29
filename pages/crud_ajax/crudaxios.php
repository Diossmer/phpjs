<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD API REST AXIOS</title>
    <link rel="stylesheet" href="../../public/assets/css/crud.css">
</head>
<body>
    <h1>CRUD API REST AXIOS</h1>
    <section class="crud">
        <article>
            <h2 class="crud-title">Agregar Santo</h2>
            <form class="crud-form">
                <input type="text" name="nombre" id="" placeholder="Nombre" required>
                <br>
                <input type="text" name="constelacion" id="" placeholder="Constelacion" required>
                <br>
                <input type="submit" value="Enviar">
                <input type="hidden" name="id">
            </form>
        </article>
        <article>
            <h2>Ver Santos</h2>
            <table class="crud-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Constelacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </article>
    </section>
    <template id="crud-template">
    <tr>
        <td class="name"></td>
        <td class="constellation"></td>
        <td>
            <Button class="edit">Editar</Button>
            <Button class="delete">Eliminar</Button>
        </td>
    </tr>
    </template>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../../public/assets/js/crud_ajax/crudaxios.js" type="text/javascript"></script>
</body>
</html>