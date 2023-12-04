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
    <title>clase admin</title>
</head>

<body>
    <div class="flex">

        <div class="bg-gray-800 text-gray-100 w-64 px-4 py-8 h-screen">
            <div class=" border border-b-1 space-y-10">
                <h1> universidad </h1>
            </div>
            <div class=" border border-b-1">
                <p>alumno</p>
                <p>alumno alumno</p>
            </div>
            <div>
                <nav>


                    <p>menu alumnno </p>
                    <a href="/alumno/clase/calificaciones"
                        class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        ver calificaciones</a>
                    <a href="/alumno/clase/editar" class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        administrar tus clases</a>

                </nav>
            </div>
        </div>
        <div>
            <header class=" bg-white flex justify-between h-12  ">
                <a class=" start-0" href="/home/maestro">HOME</a>
                <p class=" end-0"> administrador</p>
            </header>


            <div class=" flex">

                <div>
                    <div>
                        <h1> calificaciones de <?php echo $alumno[0]["nombre"]  ?> </h1>
                    </div>

                    <table id="table_id" class=" table-auto border-separate border-spacing-2 border border-slate-400">
                        <thead>
                            <tr>
                                <th class="border border-slate-300"># </th>
                                <th class="border border-slate-300 w-56"> Materia</th>
                                <th class="border border-slate-300  w-56"> calificacion</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($alumno as $alumno) {
                            ?>
                            <tr>
                                <td class="border border-slate-300"><?php echo $alumno["id_materia"]   ?> </td>
                                <td class="border border-slate-300"> <?php echo $alumno["nombre_materia"]   ?></td>

                                <td class="border border-slate-300 flex space-x-2"> <a
                                        class="bg-red-500 text-white font-bold py-2 px-4 rounded" href="">darse de
                                        baja</a>
                                </td>
                            </tr>
                            <?php  } ?>

                        </tbody>
                    </table>
                </div>
                <div>

                    <h1> falta </h1>

                    <div>


                    </div>
                </div>
            </div>

        </div>

    </div>


</body>