<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>edit clase</title>

</head>

<body class=" flex items-center justify-center h-screen bg-[#fff5d2]">

    <div class="flex flex-col">
        <h1> Editar Clase</h1>

        <form action="/admin/clase/agregar" method="post">
            <div class="flex flex-col">
                <label for=""> Nombre de la Clase </label>
                <input type="text" name="clase">


            </div>
            <div>
                <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/clases"> cerrar</a>
                <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded"> Guardar </button>
            </div>

        </form>

    </div>

</body>

</html>