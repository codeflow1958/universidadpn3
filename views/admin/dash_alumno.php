<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>



    <title>alumnos</title>
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
        <div class="pt-4 flex-1 ml-3 mr-2">
            <header class=" bg-white flex justify-between h-12  ">
                <a class=" start-0" href="/home/admin">HOME</a>
                <a class=" end-0" href="/salir">logout</a>
            </header>
            <div>
                <h1> Lista de Alumnos</h1>
            </div>

            <div>
                <div>

                    <button>Copy</button><button>Excel</button><button>pdf</button><button>colum </button>
                </div>
                <div><label for="">Search</label>
                    <input type="text">
                    <a href="/admin/alumno/add"> Agregar</a>
                </div>
            </div>

            <div>
                <table id="table_id" class=" table-auto border-separate border-spacing-2 border border-slate-400">
                    <thead>
                        <tr>
                            <th class="border border-slate-300"># </th>
                            <th class="border border-slate-300 w-56">nombre</th>
                            <th class="border border-slate-300  w-56">correo</th>
                            <th class="border border-slate-300 w-60">Direccion</th>
                            <th class="border border-slate-300">fecha de nacimiento</th>
                            <th class="border border-slate-300 w-48 "> acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $data) {
                        ?>
                            <tr>
                                <td class="border border-slate-300"><?php echo $data['id']; ?> </td>
                                <td class="border border-slate-300"> <?php echo $data['nombre'] . " " . $data['apellido'] ?>
                                </td>
                                <td class="border border-slate-300"> <?php echo $data['correo']; ?></td>
                                <td class="border border-slate-300"><?php echo $data['direccion']; ?></td>
                                <td class="border border-slate-300"> <?php echo $data['fecha_nac']; ?></td>
                                <td class="border border-slate-300 flex space-x-2">
                                    <a class="bg-blue-500 text-white font-bold py-2 px-4 rounded" href="/admin/alumno/edit?id=<?php echo $data['id'] ?>"> Editar</a>
                                    <form action="/alumno/delete" method="post">
                                        <input type="number" hidden name="id" value=<?php echo $data['id']; ?>>
                                        <button class="bg-red-500 text-white font-bold py-2 px-4 rounded" type="submit">delete</button>
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