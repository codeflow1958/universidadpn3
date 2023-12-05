<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Maestro</title>
</head>

<body class="bg-[#f5f6fa] mr-3">


    <div class="flex">
        <div class="bg-gray-800 text-gray-100 w-64 px-4 py-8 h-screen">
            <div class=" border border-b-1 space-y-10">
                <h1> universidad </h1>
            </div>
            <div class=" border border-b-1">
                <p><?php echo $user[0]['nombre'] . " " .  $user[0]['apellido']  ?></p>
                <p><?php echo $user[0]['correo'] ?></p>
            </div>
            <div>
                <nav>


                    <p>MENU MAESTRO </p>
                    <a href="/maestro/alumnos/lista?id=<?php echo $user[0]['id'] ?> " class="block py-2 text-gray-200 hover:bg-gray-700 hover:text-white">
                        Maestro</a>

                </nav>
            </div>
        </div>
        <div class="ml-2 flex-1 bg-[#f5f6fa] space-y-5 ">
            <header class=" bg-white flex justify-between h-12  ">
                <a class=" start-0" href="/home/maestro">HOME</a>
                <a class=" end-0" href="/salir">logout</a>
            </header>

            <div class=" flex justify-between">
                <p class=" font-bold text-lg start">DASHBORD</p>

                <p class=" end"> maestromaestro</p>
            </div>
            <div class=" bg-white w-80 ">
                <h1>Bienvenido</h1>
                <p> selecciona la accion aque quiras realizar </p>


            </div>




        </div>
    </div>
</body>

</html>