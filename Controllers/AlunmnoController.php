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
}