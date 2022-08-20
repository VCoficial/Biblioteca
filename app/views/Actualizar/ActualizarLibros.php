<?php require_once APPROOT . "/views/inc/header.php";

foreach ($data as $k) {
    $idLibro[] = $k->idLibro;
    $nombre[] = $k->Nombre;
    $fecha[] = $k->fechaDeIngreso;
    $autor[] = $k->Autor;
    $cantidad[] = $k->Cantidad;
}

?>



<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">

            <br><br><br>
            <form method="POST" action="<?php echo URLROOT; ?>Libros/actualizarLibro" class="text-white  bg-dark p-3 border border-1 rounded w-25 mx-auto ">
                <div class="form-group">
                    <input name="idLibro" hidden value="<?php echo $idLibro[0] ?>" type="text">
                    <label for="">Ingrese el nombre del libro</label>
                    <input value="<?php echo $nombre[0] ?>" name="nombreLibro" type="text" class="form-control" id="nombreLibro" placeholder="Nombre del libro" required> <br>
                </div>
                <label for="">Selecione el editoral del libro</label>
                <div class="form-group  ">


                    <select required name="editorial" required class="form-control  " id="idEditorial">

                        <?php foreach ($data as $recorrer) { ?>

                            <option required value="<?php echo $recorrer->idEditoriales  ?>"><?php echo $recorrer->NombreEditorial?></option>

                        <?php } ?>
                    </select>


                </div>
                <br>
                <div class="form-group">
                    <label for="">Fecha de Ingreso</label>
                    <input value="<?php echo $fecha[0]  ?>" name="fechaIngresoLibro" type="date" class="form-control" id="fechaIngresoLibro" placeholder="Fecha de ingreso" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese el autor del libro</label>
                    <input value="<?php echo $autor[0]  ?>" name="NonbreAutor" type="text" class="form-control" id="AutorLibro" placeholder="Autor" required><br>
                </div>

                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input value="<?php echo $cantidad[0] ?>" name="CantidadIngresadaLibro" type="text" class="form-control" id="FechaPublicacionLibro" placeholder="Cantidad" required><br>
                </div>

                <div class="d-flex justify-content-around ">

                    <input value="Actualizar" type="submit" class="btn btn-primary    "></input>

                    <a class="btn btn-danger  " href="<?php echo URLROOT; ?>Libros">Cancelar</a>
                </div>


            </form>

        </div>
    </div>
    <br><br><br>


    <?php require_once '../app/views/inc/footer.php'; ?>