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
            <header class=" bg-white flex justify-between h-12  ">
                <a class=" start-0" href="/home/admin">HOME</a>
                <p class=" end-0"> administrador</p>
            </header>
            <div>
                <h1> LISTA DE PERMISOS</h1>
            </div>

            <div>
                <div>
                    <button>Copy</button><button>Excel</button><button>pdf</button><button>colum </button>
                </div>
                <div><label for="">Search</label>
                    <input type="text">
                </div>
            </div>

            <div class="overflow-auto ">
                <table class=" w-full table-auto border-separate border-spacing-1 border border-slate-400" class="border border-slate-300">
                    <thead>
                        <tr>
                            <th class="border border-slate-300"># </th>
                            <th class="border border-slate-300 w-80 "> Email/Usuario</th>
                            <th class="border border-slate-300 w-40"> permisos</th>
                            <th class="border border-slate-300 w-28">estado</th>
                            <th class="border border-slate-300 w-48">accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data as $data) {
                        ?>
                            <tr>
                                <td class="border border-slate-300"> <?php echo $data['id']; ?></td>
                                <td class="border border-slate-300"><?php echo $data['correo']; ?></td>
                                <td class="border border-slate-300"><?php
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
                                                                    }    ?></td>
                                <td class="border border-slate-300">activo</td>
                                <td class="border border-slate-300">
                                    <a class="bg-blue-500 text-white font-bold py-1 px-4 rounded" href="/admin/permiso/edit?id=<?php echo $data['id'] ?>"> Editar</a>

                                </td>
                            </tr>

                        <?php  } ?>
                    </tbody>
                </table>
            </div>
        </div>

</body>

</html>