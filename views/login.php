<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/public/output.css" />
    <title>login2</title>
</head>

<body class="flex items-center justify-center h-screen">
    <form action="/login" method="post">
        <div>
            <label for="correo"> Correo</label>
            <input type="email" id="correo" name="correo">

        </div>
        <div>
            <label for="contrasena">Passeword</label>
            <input type="text" id="contrasena" name="password">
        </div>
        <button type="submit">Iniciar </button>


    </form>
</body>

</html>