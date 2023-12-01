<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/Models/Materia.php";

class MateriaController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Materia();
    }
}
