<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add maestro</title>
</head>

<body>
    <h1> crear maestro</h1>
    <div>
        <form action=" /admin/maestro/agregar" method="post">
            <label for="">Correo Electronico</label>
            <input type="text">
            <label for="">Nombre(s) </label>
            <input type="text">
            <label for="">Apellido(s) </label>
            <input type="text">
            <label for="">Direccion</label>
            <input type="text">
            <label for="">Fecha de Nacimiento</label>
            <input type="date">
            <input type="text" value="admin" name="password">
            <input type="text" value="2" name="rol ">

    </div>
    <div>
        <button>Close</button>
        <button type="submit">Crear</button>
    </div>
    </form>
</body>

</html>