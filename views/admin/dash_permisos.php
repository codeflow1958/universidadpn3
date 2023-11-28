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
                    <tr>
                        <td> 1</td>
                        <td><?php echo $data['correo']; ?></td>
                        <td>admin</td>
                        <td>activo</td>
                        <td>
                            <a href="/admin/permiso/edit"> Editar</a>
                            <form action="">
                                <button>delete</button>
                            </form>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

</body>

</html>