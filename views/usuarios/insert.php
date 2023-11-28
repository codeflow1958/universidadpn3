<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hola</title>
</head>

<body>
    <h1>Crear nuevo cliente</h1>

    <form action="/Controllers/UsuarioController.php" method="post">


        <div>
            <input type="hidden" name="action" value="insert">
            <label for="corre">correo:</label>
            <input type="text" id="correo" name="correo">
        </div>
        <div>
            <label for="password">password:</label>
            <input type="text" id="password" name="password">
        </div>
        <div>
            <label for="rol">rol:</label>
            <select name="rol" id="rol">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>

        <button type="submit">Guardar</button>
    </form>
</body>

</html>