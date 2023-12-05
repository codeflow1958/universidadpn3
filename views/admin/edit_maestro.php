<?php
!isset($data) && header("Location:/admin/maestros ");
session_start();
$_SESSION["cliente_edit"] = $data["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>edit maestro</title>
</head>

<body>
    <div class="flex">
        <div class="bg-gray-800 text-gray-100 w-64 px-4 py-8 h-screen">
            <div class="border-b-1 border-solid space-y-10">
                <h1> universidad</h1>
            </div>
            <div class=" ">
                <p>admin</p>
                <p>administrador</p>
            </div>
            <div>
                <nav>
                    <p>MENU ADMINISTRACION </p>
                    <a href="/admin/permisos" class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        Permisos</a>
                    <a href="/admin/maestros" class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        Maestros</a>
                    <a href="/admin/alumnos" class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        Alumnos</a>
                    <a href="/admin/clases" class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        Clases</a>
                </nav>
            </div>
        </div>

        <div class="pt-4 flex-1 flex items-center justify-center bg-[#fff5d2]">

            <div class="border-2 border-solid  w-80 h-96 flex flex-col items-center justify-center bg-white ">

                <form action="/admin/maestro/editar" method="post" class="">

                    <div class=" flex  flex-col  items-center justify-center h-screen ">
                        <h1 class=" font-bold text-lg pb-2 ">Editar Maestros</h1>
                        <label for="">Correo Electronico</label>
                        <input class="border-2 border-solid border-gray-500 " type="text" disabled
                            value="<?= $data['correo'] ?> " name="correo">
                        <label for="">Nombre(s) </label>
                        <input class="border-2 border-solid border-gray-500 " type="text"
                            value=" <?= $data['nombre'] ?>" name="nombre">
                        <label for="">Apellido(s) </label>
                        <input class="border-2 border-solid border-gray-500 " type="text"
                            value=" <?= $data['apellido'] ?>" name="apellido">
                        <label for="">Direccion</label>
                        <input class="border-2 border-solid border-gray-500 " type="text"
                            value=" <?= $data['direccion'] ?>" name="direccion">
                        <label for="">Fecha de Nacimiento</label>
                        <input class="border-2 border-solid border-gray-500 " type="date"
                            value=" <?= $data['fecha_nac'] ?>" name="fecha_nac">


                        <div class="pt-2">
                            <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/maestros">
                                Cerrar</a>
                            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
                                type="submit">Guardar</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
</body>

</html>