<?php
//modelo correspondiente a cada controlador
class ClientesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function traerClientes()
    {
        $this->db->query("SELECT * FROM clientes");



        return $this->db->getAll();
    }

    public function buscarCliente($data)
    {
        $valor = $this->db->query("SELECT * FROM clientes where Identificacion = :identificacion");

        $valor->bindParam("identificacion", $data['identificacion'], pdo::PARAM_INT);

        return $this->db->getOne();
    }

    public function abrirEditarClientes($data)
    {
        $valor = $this->db->query("SELECT * FROM Clientes where idCliente = :id");

        $valor->bindParam("id", $data['id'], pdo::PARAM_INT);

        return $this->db->getOne();
    }

    public function insertarCliente($data)
    {
        $valor = $this->db->query("INSERT INTO clientes 
        (Identificacion,Nombre1,Nombre2,Apellido1,Apellido2,Telefono,Correo,Estado) VALUES
        (:Identificacion,:Nombre1,:Nombre2,:Apellido1,:Apellido2,:telefono,:Correo,1)");

        $valor->bindParam(":Identificacion", $data['identificacion'], pdo::PARAM_INT);
        $valor->bindParam(":Nombre1", $data['nombre1Cliente'], pdo::PARAM_STR);
        $valor->bindParam(":Nombre2", $data['nombre2Cliente'], pdo::PARAM_STR);
        $valor->bindParam(":Apellido1", $data['apellido1Cliente'], pdo::PARAM_STR);
        $valor->bindParam(":Apellido2", $data['apellido2Cliente'], pdo::PARAM_STR);
        $valor->bindParam(":telefono", $data['telefonoCliente'], pdo::PARAM_STR);
        $valor->bindParam(":Correo", $data['correoCliente'], pdo::PARAM_STR);


        $this->db->execute();
    }

    public function actualizarClientes($data)
    {
        $valor = $this->db->query("UPDATE `clientes` SET
         `Nombre1`=:Nombre1,
         `Nombre2`=:Nombre2,
         `Apellido1`=:Apellido1,
         `Apellido2`=:Apellido2,
         `Telefono`=:Telefono,
         `Correo`=:correo,
         `Estado`=:estado WHERE idCliente = :idCliente");

        $valor->bindParam(":idCliente", $data['idCliente'], pdo::PARAM_INT);
        $valor->bindParam(":Nombre1", $data['primerNombre'], pdo::PARAM_STR);
        $valor->bindParam(":Nombre2", $data['segundoNombre'], pdo::PARAM_STR);
        $valor->bindParam(":Apellido1", $data['primerApellido'], pdo::PARAM_STR);
        $valor->bindParam(":Apellido2", $data['segundoApellido'], pdo::PARAM_STR);
        $valor->bindParam(":Telefono", $data['telefono'], pdo::PARAM_STR);
        $valor->bindParam(":correo", $data['correo'], pdo::PARAM_STR);
        $valor->bindParam(":estado", $data['estado'], pdo::PARAM_INT);

        $this->db->execute();
    }

    public function actualizarPenalizacion($data)
    {
        $valor = $this->db->query("UPDATE `clientes` SET
         `Nombre1`=:Nombre1,
         `Nombre2`=:Nombre2,
         `Apellido1`=:Apellido1,
         `Apellido2`=:Apellido2,
         `Telefono`=:Telefono,
         `Correo`=:correo,
         `Estado`=:estado WHERE idCliente = :idCliente");

        $valor->bindParam(":idCliente", $data['idCliente'], pdo::PARAM_INT);
        $valor->bindParam(":Nombre1", $data['primerNombre'], pdo::PARAM_STR);
        $valor->bindParam(":Nombre2", $data['segundoNombre'], pdo::PARAM_STR);
        $valor->bindParam(":Apellido1", $data['primerApellido'], pdo::PARAM_STR);
        $valor->bindParam(":Apellido2", $data['segundoApellido'], pdo::PARAM_STR);
        $valor->bindParam(":Telefono", $data['telefono'], pdo::PARAM_STR);
        $valor->bindParam(":correo", $data['correo'], pdo::PARAM_STR);
        $valor->bindParam(":estado", $data['estado'], pdo::PARAM_INT);
        $this->db->execute();
    }


}
