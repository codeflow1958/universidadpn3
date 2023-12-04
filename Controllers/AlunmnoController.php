<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";

class AlumnoController
{

    public function delete($id)
    {
        $userModel = new User();
        $userModel->destroy($id);
        header("Location:/admin/alumnos");
    }

    public function agregar($data)
    {
        $userModel = new User();
        $userModel->create($data);

        header("Location:/admin/alumnos ");
    }

    public function editalumno($data)
    {
        $userModel = new User();
        $userModel->update($data);
        //var_dump($data);

        header("Location:/admin/alumnos");
    }

    public function editar($data)
    {
        $userModel = new User();
        $userModel->updaterol($data);
        //var_dump($data);

        header("Location:/admin/permisos");
    }
}
