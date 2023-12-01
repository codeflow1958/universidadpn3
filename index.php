<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/Login.controller.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/AdminController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/MaestroController.php");
require_once $_SERVER["DOCUMENT_ROOT"] . "/Controllers/AlunmnoController.php";




// ENRUTADOR
$loginController = new LoginController();
$adminController = new AdminController();
$maestrocontroller = new MaestroController();
$alumno = new AlumnoController();

// Dividimos la ruta por el signo "?" para no leer los query params. Ejem: /clientes?id=1
$route = explode("?", $_SERVER["REQUEST_URI"]);

$method = $_SERVER["REQUEST_METHOD"];




if ($method === "POST") {
    switch ($route[0]) {
        case '/login':
            $loginController->login($_POST["correo"], $_POST["password"]);
            break;

        case '/alumno/delete':
            echo "eliminando.....  ";
            $alumno->delete($_POST["id"]);

            break;

        case '/maestro/delete':
            echo "eliminando.....  ";
            $maestrocontroller->delete($_POST["id"]);

            break;

        case '/admin/maestro/agregar':


            $maestrocontroller->agregar($_POST);

            break;

        case '/admin/maestro/editar':


            $maestrocontroller->editar($_POST);

            break;

        case '/admin/alumno/agregar':

            $alumno->agregar($_POST);


            break;

        default:
            echo "NO ENCONTRAMOS post";
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

            $adminController->editmaestros($_GET["id"]);
            break;

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

        case '/admin/clases/add':
            $adminController->addclases();

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
            echo "NO ENCONTRAMOS LA RUTA get.";
            break;
    }
}
