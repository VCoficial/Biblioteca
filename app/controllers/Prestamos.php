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
        $data = $this->prestamos->traerPrestamos();
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

            echo json_encode($data);
        }
    }

    public function insertarPrestamos()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $data = [

                'idLibroPrestamo' => $_POST['idLibroInsertar'],
                'idClientePrestamo' => $_POST['idClienteInsertar'],
                'nomLibroInsertar' => $_POST['nomLibroInsertar'],
                'nomClienteInsertar' => $_POST['nomClienteInsertar'],
                'fechaInicioPrestamo' => $_POST['fechaInicioInsertar'],
                'fechaFinalPrestamo' => $_POST['fechaFinInsertar'],
                'cantidadLibros' => $_POST['cantidadInsertar'],
                'idPrestador' => $_POST['prestadorInsertar']
            ];

            echo json_encode($data);

            //$this->prestamos->insertarPrestamos($data);

            //$this->index();
        }
    }
}
