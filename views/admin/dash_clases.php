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
                <a href="/admin/clase/add"> Agregar</a>
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
                    <tr>
                        <td> 1</td>
                        <td> guarani</td>
                        <td> lucas martinez</td>
                        <td>13</td>


                        <td>
                            <a href="/admin/clase/edit"> Editar</a>
                            <form action="">
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

</body>

</html>