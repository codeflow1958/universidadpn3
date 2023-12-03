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

<body class=" flex items-center justify-center h-screen">

    <div>
        <form action="/admin/alumno/editar" method="post">
            <div class=" flex  flex-col ">

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


                <div>
                    <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/alumnos"> cerrar</a>
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>