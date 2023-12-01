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
            <table>
                <thead>
                    <tr>
                        <th># </th>
                        <th>Clase</th>
                        <th>maestro</th>
                        <th>alumnos</th>


                        <th> acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($materia as $materia) {


                    ?>


                        <tr>

                            <td><?php echo $materia['id']; ?> </td>
                            <td><?= $materia['nombre_materia']; ?> </td>
                            <td><?= $materia['profesor']; ?> </td>
                            <td> </td>


                            <td>
                                <a href="/admin/clase/edit?id=<?php echo $materia['id'] ?>"> Editar</a>

                                <form action="">

                                    <button>Delete</button>
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