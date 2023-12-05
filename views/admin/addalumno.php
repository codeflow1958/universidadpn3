<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>add alumno</title>
</head>

<body class=" flex items-center justify-center h-screen bg-[#fff5d2]">
    <div>
        <div>

            <div class="border-2 border-solid  w-80 h-96 flex flex-col items-center justify-center bg-white ">
                <form action="/admin/alumno/agregar" method="post">
                    <h1 class=" font-bold text-lg pb-2 ">Agregar Alumno</h1>
                    <div class="flex flex-col">
                        <label for="">Correo Electronico</label>
                        <input class="border-2 border-solid border-gray-500 " type="text" name="correo">
                        <label for="">Nombre(s) </label>
                        <input class="border-2 border-solid border-gray-500 " type="text" name="nombre">
                        <label for="">Apellido(s) </label>
                        <input class="border-2 border-solid border-gray-500 " type="text" name="apellido">
                        <label for="">Direccion</label>
                        <input class="border-2 border-solid border-gray-500 " type="text" name="direccion">
                        <label for="">Fecha de Nacimiento</label>
                        <input class="border-2 border-solid border-gray-500 " type="date" name="fecha_nac">
                        <input class="border-2 border-solid border-gray-500 " type="text" hidden value="alumno"
                            name="password">
                        <input class="border-2 border-solid border-gray-500 " type="number" hidden value=3 name="rol">


                        <div class="mt-3">
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