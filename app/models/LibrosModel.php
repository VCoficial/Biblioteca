<?php
//modelo correspondiente a cada controlador
class LibrosModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Dbase;
    }

    public function traerTodosLosLibros()
    {
        $this->db->query("SELECT * from libros");
        return $resulset = $this->db->getAll();
    }

    public function abrirActualizarEditorial($data)
    {

        $valor = $this->db->query("SELECT * FROM editoriales where idEditoriales = :id");

        $valor->bindParam(':id', $data['id'], pdo::PARAM_INT);


        return $this->db->getOne();
    }

    public function insertarEditorial($data)
    {

        $valor = $this->db->query("INSERT INTO editoriales (NombreEditorial) VALUES (:Nombre)");

        $valor->bindParam(':Nombre', $data['nomEditorial'], pdo::PARAM_STR);


        $this->db->execute();
    }

    public function actualizarEditoriales($data)
    {

        $valor = $this->db->query("UPDATE `editoriales` SET 
        `NombreEditorial`= :nombre1 ,
        `Estado`= :estadoEditorial where idEditoriales = :idEditorial");

        $valor->bindParam(':nombre1', $data['nombre1'], pdo::PARAM_STR);
        $valor->bindParam(':estadoEditorial', $data['estadoEditorial'], pdo::PARAM_INT);
        $valor->bindParam(':idEditorial', $data['idEditorial'], pdo::PARAM_INT);


        $this->db->execute();
    }

    public function traerEditoriales()
    {
        $this->db->query("SELECT idEditoriales,NombreEditorial, Estado FROM editoriales");

        return $resulset = $this->db->getAll();
    }

    public function InsertarLibro($data)
    {
        $valor = $this->db->query("INSERT INTO libros 
        (Nombre,Editoriales_idEditoriales,fechaDeIngreso,Autor,FechaPublicacion,Cantidad ,Estado ) VALUES
        (:nom,:edi,:fechaIngreso,:autor, :fechap, :cantidad,1)");

        $valor->bindParam(":nom", $data['nomLibro'], pdo::PARAM_STR);
        $valor->bindParam(":edi", $data['editorial'], pdo::PARAM_INT);
        $valor->bindParam(":fechaIngreso", $data['fechaIngreso'], pdo::PARAM_STR);
        $valor->bindParam(":autor", $data['nomAutor'], pdo::PARAM_STR);
        $valor->bindParam(":fechap", $data['fechaPublicacion'], pdo::PARAM_STR);
        $valor->bindParam(":cantidad", $data['libroCantidad'], pdo::PARAM_STR);

        $this->db->execute();
    }

    public function buscarLibro($data)
    {
        $valor = $this->db->query("SELECT * from libros where Nombre like '%' :buscar '%' ");

        $valor->bindParam(":buscar", $data['buscarLibro'], pdo::PARAM_STR);


        return $this->db->getAll();
    }

    public function ActualizarLibro($data)
    {
        $valor = $this->db->query("UPDATE `libros` SET 
        `Nombre`=:Nombre,
        `Editoriales_idEditoriales`=:Editoriales_idEditoriales,
        `fechaDeIngreso`=:fechaDeIngreso,
        `Autor`=:Autor,
        `Cantidad`=:Cantidad WHERE idLibro = :idLibro");

        $valor->bindParam(":idLibro", $data['idLibro'], pdo::PARAM_INT);
        $valor->bindParam(":Nombre", $data['nombreLibro'], pdo::PARAM_STR);
        $valor->bindParam(":Editoriales_idEditoriales", $data['editorial'], pdo::PARAM_STR);
        $valor->bindParam(":fechaDeIngreso", $data['fechaIngresoLibro'], pdo::PARAM_STR);
        $valor->bindParam(":Autor", $data['NonbreAutor'], pdo::PARAM_STR);
        $valor->bindParam(":Cantidad", $data['CantidadIngresadaLibro'], pdo::PARAM_INT);

        $this->db->execute();
    }

    public function buscarLibroActualizar($data)
    {
        $valor = $this->db->query("SELECT * FROM libros where idLibro= :id");

        $valor->bindParam(":id", $data['id'], pdo::PARAM_INT);

        $resulset = $this->db->getAll();

        return $resulset;
    }

    public function buscarEditorial($data)
    {
        $valor = $this->db->query("SELECT * FROM editoriales where NombreEditorial like '%' :buscar '%' ");

        $valor->bindParam(":buscar", $data['buscar'], pdo::PARAM_STR);

        $resulset = $this->db->getall();

        return $resulset;
    }


    public function eliminarLibro($data)
    {
        $valor = $this->db->query("UPDATE `libros` SET `Estado`= 0 where idLibro = :id");

        $valor->bindParam(":id", $data['idLibro'], pdo::PARAM_INT);

        $this->db->execute();

    }

    public function activarLibro($data)
    {
        $valor = $this->db->query("UPDATE `libros` SET `Estado`= 1 where idLibro = :id");

        $valor->bindParam(":id", $data['idLibro'], pdo::PARAM_INT);

        $this->db->execute();

    }

}
