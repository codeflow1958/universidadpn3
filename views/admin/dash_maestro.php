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
            <h1> LISTA DE maestros</h1>
        </div>

        <div>
            <div>
                <button>Copy</button><button>Excel</button><button>pdf</button><button>colum </button>
            </div>
            <div><label for="">Search</label>
                <input type="text">
                <a href="/admin/maestro/add"> Agregar</a>
            </div>
        </div>

        <div>
            <table>
                <thead>
                    <tr>
                        <th># </th>
                        <th> Email</th>
                        <th> direccion</th>
                        <th>Fec. de Nacimiento </th>
                        <th>Clase asignada</th>
                        <th> acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $data) {
                    ?>
                    <tr>
                        <td> <?php echo $data['id']; ?> </td>
                        <td> <?php echo $data['correo']; ?></td>
                        <td><?php echo $data['direccion']; ?></td>
                        <td><?php echo $data['fecha_nac']; ?></td>
                        <td>matematicas</td>
                        <td>
                            <a href="/admin/maestros/edit?id=<?php echo $data['id'] ?>"> Editar</a>
                            <form action="/maestro/delete" method="post">
                                <input type="number" hidden name="id" value=<?php echo $data['id']; ?>>
                                <button>delete</button>
                            </form>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>