<?php require_once APPROOT . "/views/inc/header.php"; ?>
<br><br><br>

<div class="container  ">

    <div class="row text-center ">
        <div class="col-md-12  ">
            <form method="POST" id="idFormInsertarLibro" class="text-white  bg-dark p-3 border border-1 rounded w-50 mx-auto ">
                <div class="form-group">
                    <label for="">Ingrese el nombre del libro</label>
                    <input name="nombreLibro" type="text" class="form-control" id="nombreLibro" placeholder="Nombre del libro" required> <br>
                </div>
                <label for="">Selecione el editoral del libro</label>
                <div class="form-group  ">


                    <select name="editorial" required class="form-control  " id="idEditorial">

                        <?php foreach ($data as $recorrer) { ?>

                            <option value="<?php echo $recorrer->idEditoriales ?>"><?php echo $recorrer->NombreEditorial ?></option>

                        <?php } ?>
                    </select>


                </div>
                <br>
                <div class="form-group">
                    <label for="">Fecha de Ingreso</label>
                    <input name="fechaIngresoLibro" type="date" class="form-control" id="fechaIngresoLibro" placeholder="Fecha de ingreso" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese el autor del libro</label>
                    <input name="NonbreAutor" type="text" class="form-control" id="AutorLibro" placeholder="Autor" required><br>
                </div>

                <div class="form-group">
                    <label for="">Fecha de publicacion</label>
                    <input name="fechaPublicacion" type="date" class="form-control" id="fechaEntregaLibro" placeholder="Autor"><br>
                </div>

                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input name="CantidadIngresadaLibro" type="text" class="form-control" id="FechaPublicacionLibro" placeholder="Cantidad" required><br>
                </div>

                <div class="d-flex justify-content-around ">

                    <button id="registrarLibro" type="submit" class="btn btn-primary">Registrar Libro</button>
                    <a class="btn btn-danger  " href="<?php echo URLROOT; ?>Libros">Cancelar</a>
                </div>


            </form><br><br>


        </div>
    </div>
    <br>



    <script src="<?php echo URLROOT ?>public/js/registrarLibro.js"></script>
    <?php require_once '../app/views/inc/footer.php'; ?>