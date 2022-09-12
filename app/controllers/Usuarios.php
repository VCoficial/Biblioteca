<?php

class Usuarios extends Controller
{
    public $data = [];
    public function __construct()
    {
        //Configuramos el modelo correspondiente a este controlador
        //$this->pacienteModel = $this->getModel('PacienteModel');
        $this->Usuarios = $this->getModel('UsuarioModel');
    }
    public function index()
    {
        $this->data = $this->Usuarios->traerUsuarios();
        //$data = $this->pacienteModel->listar();
        $this->renderView('/secciones/usuarios', $this->data);
    }

    public function InsertarUsuarios()
    {

        $this->data = [
            'Nombre1' => $_POST["nombre1"],
            'Nombre2' => $_POST["nombre2"],
            'Apellido1' => $_POST["Apellido1"],
            'Apellido2' => $_POST["Apellido2"],
            'Telefono' => $_POST["telefonoUsuario"],
            'Correo' => $_POST["correoUsuario"],
            'Usuario' => $_POST["usuario"],
            'password' => $_POST["password"],
            'roles' => $_POST["rol"]
        ];

        $this->Usuarios->InsertarUsuarios($this->data);

        $this->data = $this->Usuarios->traerUsuarios();

        echo json_encode($this->data);
    }

    public function ActualizarUsuario()
    {
        $this->data = [
            'iduser' => $_POST['id'],
            'nom1' => $_POST['nombre1'],
            'nom2' => $_POST['nombre2'],
            'ape1' => $_POST['Apellido1'],
            'ape2' => $_POST['Apellido2'],
            'telefono' => $_POST['telefonoUsuario'],
            'correo' => $_POST['correoUsuario'],
            'user' => $_POST['usuario'],
            'pass' => $_POST['password'],
            'rol' => $_POST['rol'],
        ];

        //echo json_encode($this->data);

        $this->Usuarios->ActualizarUsuario($this->data);
        $this->data = $this->Usuarios->traerUsuarios();
        echo json_encode($this->data);
    }

    public function buscarUsuario($id)
    {
        $this->data = [
            'id' => $id
        ];

        $this->data = $this->Usuarios->buscarUsuario($this->data);

        $this->renderView('/Actualizar/ActualizarUsuarios', $this->data);
    }


    public function traerUsuarios($id)
    {
        $this->data = [
            'id' => $id
        ];

        $this->data = $this->Usuarios->buscarUsuario($this->data);

        $this->renderView('/Actualizar/ActualizarUsuarios', $this->data);
    }
}
