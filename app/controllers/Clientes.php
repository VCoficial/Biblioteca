<?php

class Clientes extends Controller
{

    public function __construct()
    {
        $this->clientes = $this->getModel('ClientesModel');
    }


    /** funcion principal para mostrar la vista de clientes
     * @return vista 
     * @param data
     */
    public function index()
    {
        $data = [];
        $data = $this->clientes->traerClientes();
        $this->renderView('secciones/clientes', $data);
    }


    /**
     * abrirRegistrarClientes
     * esta funcion abre la vista para poder registrar los clientes 
     * @return vista
     * @param data
     */
    public function abrirRegistrarClientes()
    {
        $data = [];
        $this->renderView('Registros/registrarClientes', $data);
    }

    /**
     * insertarClientes
     *
     * @return void
     */
    public function insertarClientes()
    {


        $data = [
            'identificacion' => $_POST['identificacion'],
            'nombre1Cliente' => $_POST['nombre1Cliente'],
            'nombre2Cliente' => $_POST['nombre2Cliente'],
            'apellido1Cliente' => $_POST['apellido1Cliente'],
            'apellido2Cliente' => $_POST['apellido2Cliente'],
            'telefonoCliente' => $_POST['telefonoCliente'],
            'correoCliente' => $_POST['correoCliente']

        ];

        $this->clientes->insertarCliente($data);

        echo json_encode(true);
    }


    public function abrirBuscarClientes()
    {
        $data = [];
        $this->renderView('busquedas/buscarClientes', $data);
    }

    public function abrirEditarClientes($id)
    {
        $data = [
            'id' => $id
        ];

        $data = $this->clientes->abrirEditarClientes($data);


        $this->renderView('Actualizar/ActualizarClientes', $data);
    }


    public function buscarClientes()
    {
        $data = [
            'identificacion' => $_POST['buscarCliente']
        ];

        $data = $this->clientes->buscarCliente($data);

        $this->renderView('busquedas/buscarClientes', $data);
    }

    public function actualizarCliente()
    {
        $this->data = [
            'idCliente' => $_POST['idCliente'],
            'primerNombre' => $_POST['primerNombre'],
            'segundoNombre' => $_POST['segundoNombre'],
            'primerApellido' => $_POST['primerApellido'],
            'segundoApellido' => $_POST['segundoApellido'],
            'telefono' => $_POST['telefono'],
            'correo' => $_POST['correo'],
            'estado' => $_POST['estadoCliente']
        ];


        $this->clientes->actualizarClientes($this->data);
        echo json_encode(true);
        /*echo "<pre>";
        print_r($this->data);
        echo "<pre>";*/
    }
}
