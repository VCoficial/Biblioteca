<?php

class Editoriales extends Controller
{
    public $data = [];
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        //$this->pacienteModel = $this->getModel('PacienteModel');
        $this->Editoriales = $this->getModel('LibrosModel');
    }
    public function index()
    {
        $this->data = $this->Editoriales->traerEditoriales();
        //$data = $this->pacienteModel->listar();
        $this->renderView('/secciones/editoriales', $this->data);
    }

    public function insertarEditoriales()
    {

        $this->data = [
            'nomEditorial' => $_POST['nombre1']
        ];

        $this->Editoriales->insertarEditorial($this->data);
        //$data = $this->pacienteModel->listar();
        $this->index();
    }

    public function abrirActualizarEditorial($id)
    {

        $this->data = [
            'id' => $id
        ];


        $this-> data = $this->Editoriales->abrirActualizarEditorial($this->data);

        $this->renderView('/Actualizar/ActualizarEditoriales', $this->data);
    }

    public function actualizarEditorial()
    {
        $this->data = [
            'idEditorial' => $_POST['idEditorial'],
            'nombre1' => $_POST['nombre1'],
            'estadoEditorial' => $_POST['estadoEditorial'],
        ];
        $this->Editoriales->actualizarEditoriales($this->data);
        $this->index();
    }

    public function buscarEditorial()
    {

        $this->data = [
            'buscar' => $_POST['buscar']
        ];

        if($this->data['buscar'] !="" ){

            $this->data = $this->Editoriales->buscarEditorial($this->data);

            

            $this->renderView('/secciones/editoriales', $this->data);

        }else{
            $this->index();
        }
    }

    public function imprimirReporte()
    {
        // traemos la data
        $this->data = $this->Editoriales->traerEditoriales();
        // renderisamos la vista
        $this->renderView('reportes/rptEditoriales', $this->data);
    }

}
