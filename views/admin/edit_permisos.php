<?php
!isset($data) && header("Location:/admin/permisos ");
session_start();
$_SESSION["cliente_edit"] = $data["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERMISOS</title>
</head>

<body>

    <div>
        <form action="/admin/rol/edit" method="post">
            <label for=""> email del usuario</label>
            <input type="text" disabled value="<?= $data['correo'] ?> " name="correo">
            <label for="">Rolo del usuario </label>
            <input type="text" disabled value="<?php
                                                switch ($data['rol']) {
                                                    case '1':
                                                        echo " ADMIN";
                                                        break;
                                                    case '2':
                                                        echo "MAESTRO";
                                                        break;
                                                    case '3':
                                                        echo " ALUMNO";
                                                        break;
                                                }    ?>">
            <label for="">Seleccione un nuevo rol </label>
            <select name="rol" id="">
                <option value=1> admin</option>
                <option value=2> maestro</option>
                <option value=3>alumno</option>
            </select>
            <a href="/admin/permisos">cerrar</a>
            <button type="submit"> Guardar Cambios</button>


        </form>
    </div>



</body>

</html>