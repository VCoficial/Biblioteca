<?php

class Inicio extends Controller
{


    public $data = [];
    public function __construct()
    {
    }
    public function index()
    {
        error_reporting(0);
        session_destroy();
        $this->data = []; //temporal por que no hay
        $this->renderView('inicio', $this->data);
    }



}
