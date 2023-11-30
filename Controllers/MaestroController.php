<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";



class MaestroController
{
    public function index()
    {

        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/dashteacher.php";
    }

    public function readalumno()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/maestro/readalunos.php";
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

        header("Location:/admin/maestros ");
    }
}
