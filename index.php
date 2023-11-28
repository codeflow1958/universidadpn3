<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/Login.controller.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/AdminController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/MaestroController.php");

// ENRUTADOR
$loginController = new LoginController();
$adminController = new AdminController();
$maestrocontroller = new MaestroController();

// Dividimos la ruta por el signo "?" para no leer los query params. Ejem: /clientes?id=1
$route = explode("?", $_SERVER["REQUEST_URI"]);

$method = $_SERVER["REQUEST_METHOD"];




if ($method === "POST") {
    switch ($route[0]) {
        case '/login':
            $loginController->login($_POST["correo"], $_POST["password"]);
            break;

        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}

if ($method === "GET") {
    switch ($route[0]) {
        case '/index.php':
            $loginController->index();
            break;
        case '/dashboard':

            break;

        case '/admin/permisos':
            $adminController->permisos();

            break;

        case '/admin/maestros':
            $adminController->maestros();

            break;
        case '/admin/maestro/add':
            $adminController->addteacher();

            break;
        case '/admin/maestros/edit':
            $adminController->editmaestros();

        case '/admin/alumnos':
            $adminController->alumnos();

            break;
        case '/admin/alumno/add':
            $adminController->addalumno();
            break;

        case '/admin/alumno/edit':
            $adminController->editalumno();
            break;

        case '/admin/clases':
            $adminController->clases();

            break;

        case '/admin/clase/edit':
            $adminController->editclase();

            break;

        case '/admin/clases/add':
            $adminController->clases();

            break;

        case '/admin/permiso/edit':
            $adminController->editpermisos();
            break;

        case '/maestro/alumnos/lista':
            $maestrocontroller->readalumno();
            break;



        default:
            echo "NO ENCONTRAMOS LA RUTA.";
            break;
    }
}
