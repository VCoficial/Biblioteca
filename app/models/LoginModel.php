<?php
//modelo correspondiente a cada controlador
class LoginModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }
    public function Login()
    {
        $usuario = $_POST["u"];
        $password = $_POST["p"];

        $this->db->query("SELECT idUsuarios, Nombre1, Nombre2, Apellido1 , Apellido2 , roles.Roles FROM usuarios
         INNER JOIN roles on usuarios.Roles_idRoles = roles.idRoles 
         where Usuario='$usuario' and Passwordd='$password'");

        $cantidad = $this->db->rowCount();

        if ($cantidad > 0) {
            $resultSet = $this->db->getOne();
            return $resultSet;
        } else {
            return "vacio";
        }
    }
}
