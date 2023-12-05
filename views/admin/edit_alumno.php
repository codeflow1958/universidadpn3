<?php
!isset($data) && header("Location:/admin/alumnos ");
session_start();
$_SESSION["cliente_edit"] = $data["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>add alumno</title>
</head>

<body class=" flex items-center justify-center h-screen bg-[#fff5d2]">

    <div class="pt-4 flex-1 flex items-center justify-center ">

        <div class=" border-2 border-solid w-80 h-96 flex flex-col items-center justify-center bg-white ">
            <form action=" /admin/alumno/editar" method="post">
                <div class=" flex  flex-col ">
                    <h1 class=" font-bold text-lg pb-2 ">Editar Alumnos</h1>


                    <label for="">Correo Electronico</label>
                    <input class="border-2 border-solid border-gray-500 " type="text" value=" <?= $data['nombre'] ?>" name="nombre">
                    <label for="">Apellido(s) </label>
                    <input class="border-2 border-solid border-gray-500 " type="text" value=" <?= $data['apellido'] ?>" name="apellido">
                    <label for="">Direccion</label>
                    <input class="border-2 border-solid border-gray-500 " type="text" value=" <?= $data['direccion'] ?>" name="direccion">
                    <label for="">Fecha de Nacimiento</label>
                    <input class="border-2 border-solid border-gray-500 " type="date" value=" <?= $data['fecha_nac'] ?>" name="fecha_nac">


                    <div class="mt-3">
                        <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/alumnos"> cerrar</a>
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit">Guardar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html>