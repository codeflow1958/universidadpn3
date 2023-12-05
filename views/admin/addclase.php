<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>edit clase</title>

</head>

<body class=" flex items-center justify-center h-screen bg-[#fff5d2]">

    <div class="border-2 border-solid  w-80 h-60 flex flex-col items-center justify-center bg-white ">


        <form action="/admin/clase/agregar" method="post">
            <h1 class=" font-bold text-lg pb-2 ">Agregar Clase</h1>
            <div class="flex flex-col">
                <label for=""> Nombre de la Clase </label>
                <input class="border-2 border-solid border-gray-500 " type="text" name="clase">


            </div>
            <div class=" mt-3">
                <a class="bg-gray-500 text-white font-bold py-2 px-4 rounded" href="/admin/clases"> cerrar</a>
                <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded"> Guardar </button>
            </div>

        </form>

    </div>

</body>

</html>