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

        <div>
            <form action="/admin/clase/edit" method="post">
                <label for=""> Nombre de la Clase</label>
                <input type="text" disabled value=" <?= $materia['nombre_materia'] ?>">
                <input type="text" hidden value=" <?= $materia['id'] ?>" name="id_materia">
                <label for=""> Maestro asignado</label>



                <select name="" id="">
                    <?php
                    foreach ($data as $data) {


                    ?>
                        <option value=<?= $data['id'] ?> name="id"> <?= $data['nombre'] ?>. <?= $data['apellido'] ?>
                        </option>
                    <?php } ?>
                </select>
                <div>
                    <a href="/admin/clases"> cerrar</a>
                    <button type="submit">Guardar cambios</button>
                </div>

            </form>
        </div>


    </div>

</body>

</html>