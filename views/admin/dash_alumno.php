<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />



    <title>alumnos</title>
</head>

<body>
    <div>
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
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th># </th>
                        <th>nombre</th>
                        <th>correo</th>
                        <th>Direccion</th>
                        <th>fecha de nacimiento</th>
                        <th> acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $data) {
                    ?>
                    <tr>
                        <td><?php echo $data['id']; ?> </td>
                        <td> <?php echo $data['nombre']; ?></td>
                        <td> <?php echo $data['correo']; ?></td>
                        <td><?php echo $data['direccion']; ?></td>
                        <td> <?php echo $data['fecha_nac']; ?></td>
                        <td>
                            <a href="/admin/alumno/edit?id=<?php echo $data['id'] ?>"> Editar</a>
                            <form action="/alumno/delete" method="post">
                                <input type="number" hidden name="id" value=<?php echo $data['id']; ?>>
                                <button type="submit">delete</button>
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