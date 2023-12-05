<?php
!isset($data) && header("Location:/admin/alumnos ");
session_start();
$_SESSION["materia"] = $materia["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>edit clase</title>

</head>

<body class=" flex items-center justify-center h-screen bg-[#fff5d2] ">

    <div>


        <div class="border-2 border-solid  w-80 h-96 flex flex-col items-center justify-center bg-white ">
            <form action=" /admin/clase/edit" method="post">
                <h1 class=" font-bold text-lg pb-2 ">Editar clase </h1>
                <div class="flex flex-col">
                    <label for=""> Nombre de la Clase</label>
                    <input class="border-2 border-solid border-gray-500 " type="text" disabled value=" <?= $materia['nombre_materia'] ?>">
                    <input class="border-2 border-solid border-gray-500 " type="text" hidden value=" <?= $materia['id'] ?>" name="id_materia">
                    <label for=""> Maestro asignado</label>



                    <select class="border-2 border-solid border-gray-500 " name="maestro" id="">
                        <?php
                        foreach ($data as $data) {


                        ?>
                            <option value=<?= $data['id'] ?> name="id_maestro"> <?= $data['nombre'] ?>.
                                <?= $data['apellido'] ?>
                            </option>
                        <?php } ?>
                    </select>
                    <div class=" mt-3">
                        <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/clases"> cerrar</a>
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit">Guardar
                            cambios</button>
                    </div>
                </div>
            </form>
        </div>


    </div>

</body>

</html>