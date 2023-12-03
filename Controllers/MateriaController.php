<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Materia.php";

class MateriaController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Materia();
    }

    public function borrar($id)
    {

        $this->model->destroy($id);

        header("Location:/admin/clases");
    }

    public function agregar($request)
    {
        //var_dump($request);

        // header("Location:/admin/clases");
    }
}
