<?php
error_reporting(0);
class Menu extends Controller
{
    public $data = [];
    public function __construct()
    {
        $this->menu = $this->getModel('LoginModel');
    }

    public function index()
    {
        $this->renderView('menu', $this->data);
    }

    public function abrirMenu()
    {

        $data = $this->menu->Login();
        //print_r($data);


        if ($data == "vacio") {
            $this->renderView('inicio', $this->data);
        } else {

            session_start();

            $_SESSION["iniciar"] = $data->Nombre1 . " " . $data->Nombre2 . " " . $data->Apellido1 . " " . $data->Apellido2 . " " ." - ". $data->Roles;
            $_SESSION["rol"] = $data->Roles;
            $_SESSION["idPrestador"] = $data->idUsuarios;
            $this->renderView('menu', $data);
        }
    }


    

}
