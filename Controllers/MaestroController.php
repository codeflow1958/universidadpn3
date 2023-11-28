<?php

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
}
