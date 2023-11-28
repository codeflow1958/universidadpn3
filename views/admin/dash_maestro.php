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
                    <tr>
                        <td> 1</td>
                        <td>maestro@maestro</td>
                        <td>por la curva 13 47 27</td>
                        <td>24/3/199</td>
                        <td>matematicas</td>
                        <td>
                            <a href="/admin/maestros/edit"> Editar</a>
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