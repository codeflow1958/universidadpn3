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
    <title>edit maestro</title>
</head>

<body>

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
</body>

</html>