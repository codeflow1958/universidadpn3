<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Materia.php";


class AdminController
{
    protected $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function index()
    {

        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_admin.php";
    }

    public function permisos()
    {
        $data = $this->model->all();
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";



        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_permisos.php";
    }

    public function maestros()
    {
        $data = $this->model->where("rol", "=", "2");


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_maestro.php";
    }

    public function alumnos()
    {
        $data = $this->model->where("rol", "=", "3");


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_alumno.php";
    }

    public function clases()
    {
        $info = new Materia();
        $materia = $info->materias();

        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_clases.php";
    }

    public function editpermisos($id)
    {
        $data = $this->model->find($id);


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_permisos.php";
    }

    public function editmaestros($id)
    {
        $data = $this->model->find($id);
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_maestro.php";
    }

    public function addteacher()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/addteacher.php";
    }
    public function addalumno()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/addalumno.php";
    }

    public function editalumno($id)
    {
        $data = $this->model->find($id);


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_alumno.php";
    }

    public function editclase($id)
    {

        $info = new Materia();
        $materia = $info->find($id);

        $data = $this->model->where("rol", "=", "2");
        var_dump($profe);


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_clase.php";
    }

    public function addclases()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/addclase.php";
    }
}
