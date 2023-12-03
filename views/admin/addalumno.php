<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>add alumno</title>
</head>

<body class=" flex items-center justify-center h-screen">
    <div>
        <div>
            <h1> Agregar Alumno</h1>
            <div>
                <form action="/admin/alumno/agregar" method="post">
                    <div class="flex flex-col">
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
                        <input type="text" hidden value="alumno" name="password">
                        <input type="number" hidden value=3 name="rol">


                        <div>
                            <a href="/admin/alumnos" class="bg-gray-500 text-white font-bold py-2 px-4 rounded">
                                CERRAR</a>
                            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
                                type=" submit">Crear</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>