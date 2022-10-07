<?php
//modelo correspondiente a cada controlador
class PrestamosModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function traerPrestamos()
    {
        $this->db->query("SELECT * from prestamos");


        return $this->db->getAll();
    }

    public function buscarClienteYLibro($data)
    {
        $valor = $this->db->query("SELECT idCliente, Nombre1,  libros.idLibro, libros.Nombre FROM clientes 
        INNER JOIN libros WHERE Identificacion  = :identificacionCliente AND libros.Nombre LIKE :nombreLibro");

        $nombreLibro = $data['nomLibro'];

        /*$cadena = "%{$data['idLibro']}%";        
        $this->db->bind(':identificacionCliente', $data['idCliente']);
        $this->db->bind(':nombreLibro', $cadena);*/

        $valor->bindParam(":identificacionCliente", $data['identificacion'], pdo::PARAM_INT);
        $valor->bindValue(":nombreLibro", '%' . $nombreLibro . '%', pdo::PARAM_STR);

        return $this->db->getOne();
    }

    public function insertarPrestamos($data)
    {
        try {
            $valor = $this->db->query("INSERT INTO prestamos
            (`Libros_idLibro`, `Clientes_idCliente`, `FechaInicio`, `FechaEntrega`, `cantidadLibros`, `Prestador`) VALUES 
            (:idLibroPrestamo,:idNombreClientePrestamo,:fechaInicioPrestamo,:fechaFinalPrestamo,:cantidadLibros,:idPrestador)");


            $valor->bindParam(':idLibroPrestamo', $data['idLibroPrestamo'], pdo::PARAM_INT);
            $valor->bindValue(':idNombreClientePrestamo', $data['idNombreClientePrestamo'], pdo::PARAM_INT);
            $valor->bindValue(':fechaInicioPrestamo', $data['fechaInicioPrestamo'], pdo::PARAM_STR);
            $valor->bindValue(':fechaFinalPrestamo', $data['fechaFinalPrestamo'], pdo::PARAM_STR);
            $valor->bindValue(':cantidadLibros', $data['cantidadLibros'], pdo::PARAM_INT);
            $valor->bindValue(':idPrestador', $data['idPrestador'], pdo::PARAM_INT);

            $this->db->execute();
        } catch (Exception  $e) {
            echo "error en " . $e->getMessage() . "en la linea " . $e->getLine();
        }
    }
}
