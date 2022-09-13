<?php

class Penalizaciones extends Controller
{
    public function __construct()
    {
        $this->penalizaciones = $this->getModel('PenalizacionesModel');
    }

    public function index()
    {


        $data = [];
        $data = $this->penalizaciones->traerPenalizaciones();

        /*echo "<pre>";
        print_r($data);
        echo "</pre>";*/

        $this->renderView('secciones/penalizaciones', $data);
    }


    public function abrirRegistrarPenalizacion()
    {
        $data = [];
        $this->renderView('Registros/registrarPenalizacion', $data);
    }

    public function buscarPenalizacion()
    {
        $data = [
            'idPrestamo' => $_POST['idPrestamo']
        ];

        $data = $this->penalizaciones->traerDatosPrestamo($data);

        $this->renderView('Registros/registrarPenalizacion', $data);
    }

    public function insertarPenalizacion()
    {
        $data = [
            'idClienteEstado' => $_POST['idClienteEstado'],
            'inicioFecha' => $_POST['inicioFecha'],
            'finFecha' => $_POST['finFecha'],
            'prestamo' => $_POST['idPrestamo'],
            'idprestador' => $_POST['idprestador']
        ];

        /*echo "<pre>";
        print_r($data);
        echo "<pre>";*/

        $this->penalizaciones->insertarPenalizacion($data);

        echo json_encode(true);
    }

    public function abrirActualizarPenalizaciones($id)
    {
        $data = [
            'id' => $id
        ];

        $data = $this->penalizaciones->traerPenalizacionActualizar($data);

        $this->renderView('Actualizar/ActualizarPenalizacion', $data);
    }
}
