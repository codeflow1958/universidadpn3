<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />



    <title>Permisos</title>
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
                            <a href="/admin/alumno/edit"> Editar</a>
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


<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</html>