<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login2</title>
</head>

<body class="flex items-center justify-center h-screen bg-[#fff5d2]">
    <div class="">
        <div class=" h-[300px] w-[300px]"><img src="/assets/logo.jpg"></div>

        <form action="/login" method="post">
            <div>
                <label for="correo"> Correo</label>
                <input class="m-2 w-full" type="email" id="correo" name="correo">

            </div>
            <div>
                <label for="contrasena">Passeword</label>
                <input class="m-2 w-full" type="text" id="contrasena" name="password">
            </div>
            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded" type="submit">Iniciar </button>


        </form>
    </div>
</body>

</html>