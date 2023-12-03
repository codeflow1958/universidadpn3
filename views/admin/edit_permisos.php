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
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PERMISOS</title>
</head>

<body class=" flex items-center justify-center h-screen">

    <div>
        <form action="/admin/rol/edit" method="post">
            <div class=" flex flex-col">
                <label for=""> Email del usuario</label>
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
                    <option value=1> Admin</option>
                    <option value=2> Maestro</option>
                    <option value=3> Alumno</option>
                </select>
                <div>
                    <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/permisos">cerrar</a>
                    <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit"> Guardar
                        Cambios</button>
                </div>

            </div>
        </form>
    </div>



</body>

</html>