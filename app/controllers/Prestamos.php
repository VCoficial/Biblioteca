<?php

class Prestamos extends Controller
{
    public function __construct()
    {
        $this->prestamos = $this->getModel('PrestamosModel');
    }
    public function index()
    {
        //$data = $this->pacienteModel->listar();
        $data = [];
        $this->renderView('/secciones/prestamos', $data);
    }

    public function abrirRegistrarPrestamos()
    {
        $data = [];
        $this->renderView('/Registros/registrarPrestamos', $data);
    }

    public function buscarLibroYCLiente()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $data = [

                'nomLibro' => $_POST['idLibro'],
                'identificacion' => $_POST['idCliente']
            ];

            $data = $this->prestamos->buscarClienteYLibro($data);

            $this->renderView('/Registros/registrarPrestamos', $data);
        }
    }

    public function insertarPrestamos()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $data = [

                'idLibroPrestamo' => $_POST['idLibroPrestamo'],
                'idNombreClientePrestamo' => $_POST['idNombreClientePrestamo'],
                'fechaInicioPrestamo' => $_POST['fechaInicioPrestamo'],
                'fechaFinalPrestamo' => $_POST['fechaFinalPrestamo'],
                'cantidadLibros' => $_POST['cantidadLibros'],
                'idPrestador' => $_POST['idPrestador'],
            ];


            //var_dump($data);

            $data = $this->prestamos->buscarClienteYLibro($data);

            $this->renderView('/Registros/registrarPrestamos', $data);
        }
    }
}
