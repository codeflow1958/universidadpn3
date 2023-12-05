<?php

class Salir
{
    public function logout()
    {
        session_destroy();
        header("Location: index.php ");
    }
}
