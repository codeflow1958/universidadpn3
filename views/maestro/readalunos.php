<?php
!isset($data) && header("Location:/home ");
session_start();
$_SESSION["id"] = $data
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>clase</title>
</head>

<body>
    <div class="flex">

        <div class="bg-gray-800 text-gray-100 w-64 px-4 py-8 h-screen">
            <div class=" border border-b-1 space-y-10">
                <h1> universidad</h1>
            </div>
            <div class=" border border-b-1">
                <p>Maestro</p>
                <p>maestro maestro</p>
            </div>
            <div>
                <nav>
                    <p>MENU MAESTRO </p>
                    <a href="/maestro/alumnos/lista"
                        class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        Maestros</a>

                </nav>
            </div>
        </div>
        <div>
            <header class=" bg-white flex justify-between h-12  ">
                <a class=" start-0" href="/home/maestro">HOME</a>
                <a class=" end-0" href="/salir">logout</a>
            </header>



            <div>
                <h1> Alumnos de la clase de </h1>
            </div>

            <table id="table_id" class=" table-auto border-separate border-spacing-2 border border-slate-400">
                <thead>
                    <tr>
                        <th class="border border-slate-300"># </th>
                        <th class="border border-slate-300 w-56">nombre del alumno</th>
                        <th class="border border-slate-300  w-56">claificacion</th>
                        <th class="border border-slate-300 w-60">mensaje</th>
                        <th class="border border-slate-300 w-48 "> acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($alumno as $alumno) {
                    ?>
                    <tr>
                        <td class="border border-slate-300"><?php echo $alumno["id"] ?></td>
                        <td class="border border-slate-300">
                            <?php echo $alumno["Nombre_Alumno"] . " " . $alumno["Apellido_Alumno"] ?></td>
                        <td class="border border-slate-300"> 100</td>
                        <td class="border border-slate-300"></td>
                        <td class="border border-slate-300"></td>
                        <td class="border border-slate-300 flex space-x-2">
                            <a class="bg-blue-500 text-white font-bold py-2 px-4 rounded" href=""> lista</a>
                            <a href=""> mensaje</a>

                        </td>
                    </tr>
                    <?php  } ?>

                </tbody>
            </table>
        </div>





    </div>