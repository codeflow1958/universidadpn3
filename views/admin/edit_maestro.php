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
            <div class=" border border-b-1 space-y-10">
                <h1> universidad</h1>
            </div>
            <div class=" border border-b-1">
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

        <div>
            <form action="/admin/maestro/editar" method="post">
                <label for="">Correo Electronico</label>
                <input type="text" disabled value="<?= $data['correo'] ?> " name="correo">
                <label for="">Nombre(s) </label>
                <input type="text" placeholder=" <?= $data['nombre'] ?>" name="nombre">
                <label for="">Apellido(s) </label>
                <input type="text" placeholder=" <?= $data['apellido'] ?>" name="apellido">
                <label for="">Direccion</label>
                <input type="text" placeholder=" <?= $data['direccion'] ?>" name="direccion">
                <label for="">Fecha de Nacimiento</label>
                <input type="date" placeholder=" <?= $data['fecha_nac'] ?>" name="fecha_nac">

        </div>
        <div>
            <a href="/admin/maestros"> cerrar</a>
            <button type="submit">Guardar Cambios</button>
        </div>
        </form>
    </div>
</body>

</html>