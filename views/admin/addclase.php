<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>edit clase</title>

</head>

<body>

    <div>
        <h1> Editar Clase</h1>

        <form action="/admin/clase/add" method="post">
            <div>
                <label for=""> Nombre de la Clase </label>
                <input type="text" name="clase">
                <label for=""> Maestros Disponibles para la Clase</label>
                <select name="" id="">
                    <option name="maestro_id" value="">luids</option>
                </select>
            </div>
            <div>
                <button> Guardar cmabios</button>
            </div>

        </form>

    </div>

</body>

</html>