<?php
//modelo correspondiente a cada controlador
class PenalizacionesModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }


    public function traerPenalizaciones()
    {

        //este es el codigo para la paginacion 
        $tamañoPaginas = 3;

        if (isset($_GET["listar"])) {
            if ($_GET["listar"] == 1) {

                header("Location:Penalizaciones");
            } else {
                $pagina = $_GET["listar"];
            }
        } else {
            $pagina = 1;
        }

        $empezarDesde = ($pagina - 1) * $tamañoPaginas;

        $this->db->query("SELECT * from penalizacion");

        $cantidadDeRegistros = $this->db->rowCount();

        $totalPaginas = [
            (object) ceil($cantidadDeRegistros / $tamañoPaginas)
        ];


        $valor = $this->db->query("SELECT * from penalizacion LIMIT :pagina , :cantidad ");
        $valor->bindParam(":pagina", $empezarDesde, pdo::PARAM_INT);
        $valor->bindParam(":cantidad", $tamañoPaginas, pdo::PARAM_INT);

        return $result = array_merge($this->db->getAll(), $totalPaginas);

        /*echo "<pre>";
        print_r($result);
        echo "</pre>";*/
    }
   
    public function traerDatosPrestamo($data)
    {
        //codigo de la consulta sql para traer los clientes y los prestamos
        $valor = $this->db->query("SELECT idPrestamo, FechaInicio, FechaEntrega, clientes.Nombre1, clientes.idCliente from prestamos
         INNER JOIN clientes ON prestamos.Clientes_idCliente = clientes.idCliente
         where prestamos.Clientes_idCliente = :idPrestamo");

        $valor->bindParam(":idPrestamo", $data['idPrestamo'], pdo::PARAM_INT);

        return $this->db->getOne();
    }

    public function insertarPenalizacion($data)
    {

        $valor = $this->db->query("INSERT INTO `penalizacion` 
        (`inicioPenalizacion`, `finPenalizacion`,  `idPrestamo`, `idUsuarios`) VALUES 
        (:inicioFecha, :finFecha,  :prestamo, :idprestador);");

        $valor->bindParam(":inicioFecha", $data['inicioFecha'], pdo::PARAM_STR);
        $valor->bindParam(":finFecha", $data['finFecha'], pdo::PARAM_STR);
        $valor->bindParam(":prestamo", $data['prestamo'], pdo::PARAM_INT);
        $valor->bindParam(":idprestador", $data['idprestador'], pdo::PARAM_INT);
        $this->db->execute();


        $valor = $this->db->query("UPDATE `clientes` SET `Estado`= 2 where idCliente = :idCliente");
        $valor->bindParam(":idCliente", $data['idClienteEstado'], pdo::PARAM_INT);
        $this->db->execute();



        $valor = $this->db->query("SELECT `vecesPenalizado` FROM `clientes` where idCliente = :idPenalizacion");
        $valor->bindParam(":idPenalizacion", $data['idClienteEstado'], pdo::PARAM_INT);
        $arreglo = $this->db->getOne();


        $valor = $this->db->query("UPDATE `clientes` SET `vecesPenalizado`= :aumento WHERE idCliente = :idCambio");
        $contador =  $arreglo->vecesPenalizado + 1;
        $valor->bindParam(":aumento", $contador, pdo::PARAM_INT);
        $valor->bindParam(":idCambio", $data['idClienteEstado'], pdo::PARAM_INT);
        $this->db->execute();
    }

    public function traerPenalizacionActualizar($data)
    {
        $valor = $this->db->query("SELECT * from penalizacion where idPenalizacion = :id ");

        $valor->bindParam(":id", $data['id'], pdo::PARAM_INT);

        return $this->db->getOne();
    }
}
