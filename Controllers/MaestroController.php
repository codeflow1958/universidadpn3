<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";



class MaestroController
{
    public function index($user)
    {
        $user;
        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/dashteacher.php";
    }



    public function delete($id)
    {
        $userModel = new User();
        $userModel->destroy($id);

        header("Location:/admin/maestros ");
    }

    public function agregar($data)
    {
        $userModel = new User();
        $userModel->create($data);

        header("Location:/admin/maestros");
    }

    public function editar($data)
    {
        $userModel = new User();
        $userModel->update($data);
        //var_dump($data);

        header("Location:/admin/maestros");
    }

    public function ownalumnos($data)
    {
        $userModel = new User();
        $alumno = $userModel->listaalumnos();





        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/readalunos.php";
    }
}

//185443661