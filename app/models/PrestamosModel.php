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
            $valor = $this->db->query(
            "INSERT INTO prestamos
            (`FechaInicio`, `FechaEntrega`, `cantidadLibros`, `Prestador`,`idDetalle`,`Clientes_idCliente`) VALUES 
            (:fechaInicioPrestamo,:fechaFinalPrestamo,:cantidadLibros,:idPrestador,:idDetalle,:idCliente)");

            $valor->bindValue(':fechaInicioPrestamo', $data['fechaInicioPrestamo'], pdo::PARAM_STR);
            $valor->bindValue(':fechaFinalPrestamo', $data['fechaFinalPrestamo'], pdo::PARAM_STR);
            $valor->bindValue(':cantidadLibros', $data['cantidadLibros'], pdo::PARAM_INT);
            $valor->bindValue(':idPrestador', $data['idPrestador'], pdo::PARAM_INT);
            $valor->bindValue(':idDetalle', 0, pdo::PARAM_INT);
            $valor->bindValue(':idCliente', $data['idClientePrestamo'], pdo::PARAM_INT);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception  $e) {
            echo "error en " . $e->getMessage() . "en la linea " . $e->getLine();
        }
    }

    public function insertarDetallePrestamo($data, $num)
    {

        try {
            $numeroFilas = 0;
            while ($numeroFilas < count((array) $data['idItem'])) {

                $valor = $this->db->query("INSERT INTO detalleprestamo
                (`idLibro`, `idCliente`, `idPrestamo`) VALUES
                (:idLibro,:idCliente,:idPrestamo)");

                $valor->bindValue(':idLibro', $data['idLibroPrestamo'][$numeroFilas], pdo::PARAM_INT);
                $valor->bindValue(':idCliente', $data['idClientePrestamo'][$numeroFilas], pdo::PARAM_INT);
                $valor->bindValue(':idPrestamo', $num, pdo::PARAM_INT);
                $resulset = $this->db->execute();
                $numeroFilas = $numeroFilas + 1;
            }

            if ($resulset == true) {
                return true;
            } else {
                return false;
            }
        } catch (Exception  $e) {
            echo "error en " . $e->getMessage() . "en la linea " . $e->getLine();
        }
    }


    public function prestamosUpdate($numeroIdPrestamoDetalle,$numeroIdPrestamo)
    {

        try {
            
                $valor = $this->db->query("UPDATE `prestamos` SET `idDetalle`=:idDetalle WHERE idPrestamo = :idPrestamo");

                $valor->bindValue(':idDetalle', $numeroIdPrestamoDetalle, pdo::PARAM_INT);
                $valor->bindValue(':idPrestamo', $numeroIdPrestamo, pdo::PARAM_INT);
                
                $this->db->execute();
                
        } catch (Exception  $e) {
            echo "error en " . $e->getMessage() . "en la linea " . $e->getLine();
        }
    }

    public function getLast()
    {
        $ultimo = $this->db->lastInsertId();
        return $ultimo;
    }
}
