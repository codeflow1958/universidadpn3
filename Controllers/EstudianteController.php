<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";



class EstudianteController
{
    public function index($data)
    {

        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/dashalumno.php";
    }

    public function ownclases($data)

    {
        $userModel = new User();
        $alumno = $userModel->listadodematerias();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/calificaciones.php";
    }

    public function ownclases2($data)

    {
        $userModel = new User();
        $alumno = $userModel->listadodematerias();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/alumno/adminclases.php";
    }
}
