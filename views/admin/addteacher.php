<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>add maestro</title>
</head>

<body class=" flex  flex-col  items-center justify-center h-screen bg-[#fff5d2]">
    <h1> crear maestro</h1>
    <div class="flex flex-col">
        <form action=" /admin/maestro/agregar" method="post" class="flex flex-col">
            <label for="">Correo Electronico</label>
            <input type="text" name="correo">
            <label for="">Nombre(s) </label>
            <input type="text" name="nombre">
            <label for="">Apellido(s) </label>
            <input type="text" name="apellido">
            <label for="">Direccion</label>
            <input type="text" name="direccion">
            <label for="">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nac">
            <input type="text" hidden value="maestro" name="password">
            <input type="number" hidden value=2 name="rol">

    </div>
    <div>
        <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/maestros"> close</a>
        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit">Crear</button>
    </div>
    </form>
</body>

</html>