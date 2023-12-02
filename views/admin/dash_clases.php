<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Permisos</title>
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
            <div>
                <h1> Lista de Clases</h1>
            </div>

            <div>
                <div>
                    <button>Copy</button><button>Excel</button><button>pdf</button><button>colum </button>
                </div>
                <div><label for="">Search</label>
                    <input type="text">
                    <a href="/admin/clases/add"> Agregar</a>
                </div>
            </div>

            <div>
                <table class=" table-auto border-separate border-spacing-2 border border-slate-400">
                    <thead>
                        <tr>
                            <th class="border border-slate-300"># </th>
                            <th class="border border-slate-300">Clase</th>
                            <th class="border border-slate-300">maestro</th>
                            <th class="border border-slate-300">alumnos</th>


                            <th class="border border-slate-300"> acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($materia as $materia) {
                        ?>
                        <tr>
                            <td class="border border-slate-300 w-10"><?php echo $materia['id']; ?> </td>
                            <td class="border border-slate-300 w-40"><?= $materia['nombre_materia']; ?> </td>
                            <td class="border border-slate-300  w-60">
                                <?= $materia['nombre'] . "   " . $materia['profesor']  ?>
                            </td>
                            <td class="border border-slate-300"> </td>
                            <td class="border border-slate-300 flex space-x-2">
                                <a class="bg-blue-500 text-white font-bold py-2 px-4 rounded"
                                    href="/admin/clase/edit?id=<?php echo $materia['id'] ?>"> Editar</a>

                                <form action="/admin/clase/delete" method="post">
                                    <input type="number" hidden name="id" value=<?php echo $materia['id']; ?>>
                                    <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>