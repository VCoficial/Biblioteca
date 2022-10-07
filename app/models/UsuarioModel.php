<?php
//modelo correspondiente a cada controlador
class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    //Esta funcion Trae Todos los Usuarios para mostrarlos en una tabla
    public function traerUsuarios()
    {

        $this->db->query("SELECT * from usuarios");

        $resultSet = $this->db->getAll();
        return $resultSet;
    }

    //Funcion de insertar nuevos Usuarios
    public function InsertarUsuarios($data)
    {

    
        $valor = $this->db->query("INSERT INTO `usuarios`
        (`Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `Telefono`, `correo`, `Usuario`, `Passwordd`, `Roles_idRoles`) VALUES
        (:Nombre1 , :Nombre2 , :Apellido1 , :Apellido2 , :Telefono , :Correo , :Usuario , :pass , :roles)");

        $valor->bindParam(':Nombre1', $data['Nombre1'], pdo::PARAM_STR);
        $valor->bindParam(':Nombre2', $data['Nombre2'], pdo::PARAM_STR);
        $valor->bindParam(':Apellido1', $data['Apellido1'], pdo::PARAM_STR);
        $valor->bindParam(':Apellido2', $data['Apellido2'], pdo::PARAM_STR);
        $valor->bindParam(':Telefono', $data['Telefono'], pdo::PARAM_STR);
        $valor->bindParam(':Correo', $data['Correo'], pdo::PARAM_STR);
        $valor->bindParam(':Usuario', $data['Usuario'], pdo::PARAM_STR);
        $valor->bindParam(':pass', $data['password'], pdo::PARAM_STR);
        $valor->bindParam(':roles', $data['roles'], pdo::PARAM_INT);

        $resultSet = $this->db->execute();
    }

    //Buscamos un unico usuario por el id para el buscador
    public function buscarUsuario($data)
    {

        $valor = $this->db->query("SELECT * from usuarios INNER JOIN roles
         on usuarios.Roles_idRoles = roles.idRoles 
         where idUsuarios = :id");

        $valor->bindParam(':id', $data['id'], PDO::PARAM_INT);

        $resultSet = $this->db->getOne();
        return $resultSet;
    }

    //esta es la funcion que actualiza los usuarios
    public function ActualizarUsuario($data)
    {

        $valor = $this->db->query("UPDATE `usuarios` SET 
        `Nombre1`=:nom1,
        `Nombre2`=:nom2,
        `Apellido1`=:ape1,
        `Apellido2`=:ape2,
        `Telefono`=:telefono,
        `correo`=:correo,
        `Usuario`=:usuario,
        `Passwordd`=:passwordd,
        `Roles_idRoles`=:rol
        where idUsuarios = :id");


        $valor->bindParam(':nom1', $data['nom1'], PDO::PARAM_STR);
        $valor->bindParam(':nom2', $data['nom2'], PDO::PARAM_STR);
        $valor->bindParam(':ape1', $data['ape1'], PDO::PARAM_STR);
        $valor->bindParam(':ape2', $data['ape2'], PDO::PARAM_STR);
        $valor->bindParam(':telefono', $data['telefono'], PDO::PARAM_STR);
        $valor->bindParam(':correo', $data['correo'], PDO::PARAM_STR);
        $valor->bindParam(':usuario', $data['user'], PDO::PARAM_STR);
        $valor->bindParam(':passwordd', $data['pass'], PDO::PARAM_STR);
        $valor->bindParam(':rol', $data['rol'], PDO::PARAM_INT);
        $valor->bindParam(':id', $data['iduser'], PDO::PARAM_INT);

        $resultSet = $this->db->execute();
    }
}
