<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/User.php";

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


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_maestro.php";
    }

    public function alumnos()
    {
        $data = $this->model->where("rol", "=", "3");


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_alumno.php";
    }

    public function clases()
    {


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/dash_clases.php";
    }

    public function editpermisos()
    {


        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_permisos.php";
    }

    public function editmaestros()
    {

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

    public function editalumno()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_alumno.php";
    }

    public function editclase()
    {
        include $_SERVER["DOCUMENT_ROOT"] . "/views/admin/edit_clase.php";
    }
}
