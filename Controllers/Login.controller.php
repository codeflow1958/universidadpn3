<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Controllers/AdminController.php";
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/MaestroController.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/Controllers/EstudianteController.php");





class LoginController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * Muestra una vista con el login.
     */
    public function index()
    {


        include $_SERVER["DOCUMENT_ROOT"] . "/views/login.php";
    }
    /**
     * @param  string $correo el corro que se busca 
     * @param  string $password la contrasena
     */

    public function login($correo, $password)
    {
        $adminController = new AdminController();
        $maestrocontroller = new MaestroController();
        $estudiantecontroller = new EstudianteController();

        $usuario = $this->model->where("correo", "=", $correo);

        if (count($usuario) != 1) {
            echo "credenciales incorrectas";
        }


        if (password_verify($password, $usuario[0]["password"])) {

            switch ($usuario[0]["rol"]) {
                case '1':
                    $adminController->index();


                    break;

                case '2':
                    $maestrocontroller->index($usuario);

                    //var_dump($usuario);
                    break;
                case '3':
                    $estudiantecontroller->index($usuario);
                    break;
            }
        } else {

            echo " incorrecto";
        }
    }
}
