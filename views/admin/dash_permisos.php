<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permisos</title>
</head>

<body>
    <div>
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

        <div>
            <table>
                <thead>
                    <tr>
                        <th># </th>
                        <th> Email/Usuario</th>
                        <th> permisos</th>
                        <th>estado</th>
                        <th>accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $data) {
                    ?>
                    <tr>
                        <td> <?php echo $data['id']; ?></td>
                        <td><?php echo $data['correo']; ?></td>
                        <td><?php
                                switch ($data['rol']) {
                                    case '1':
                                        echo " ADMIN";
                                        break;
                                    case '2':
                                        echo "Maestro";
                                        break;
                                    case '3':
                                        echo " Alumno";
                                        break;
                                }    ?></td>
                        <td>activo</td>
                        <td>
                            <a href="/admin/permiso/edit"> Editar</a>
                            <form action="">
                                <button>delete</button>
                            </form>
                        </td>
                    </tr>

                    <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>