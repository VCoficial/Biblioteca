<?php require_once APPROOT . "/views/inc/header.php"; ?>



<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">

            <br><br><br>
            <form method="POST" action="<?php echo URLROOT;?>Clientes/actualizarCliente" class="text-white  bg-dark p-3 border border-1 rounded w-25 mx-auto ">
                <div class="form-group">
                    <input name="idCliente" hidden value="<?php echo $data->idCliente ?>" type="text">
                </div>

                <div class="form-group  ">
                    <label for="">Primer Nombre</label>
                    <input value="<?php echo $data->Nombre1 ?>" name="primerNombre" type="text" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="">Segundo Nombre </label>
                    <input value="<?php echo $data->Nombre2  ?>" name="segundoNombre" type="text" class="form-control" id="fechaIngresoLibro" placeholder="Segundo Nombre" required><br>
                </div>

                <div class="form-group">
                    <label for="">Primer Apellido</label>
                    <input value="<?php echo  $data->Apellido1  ?>" name="primerApellido" type="text" class="form-control" id="AutorLibro" placeholder="Primer Apellido" required><br>
                </div>

                <div class="form-group">
                    <label for="">Segundo Apellido</label>
                    <input value="<?php echo  $data->Apellido2  ?>" name="segundoApellido" type="text" class="form-control" id="AutorLibro" placeholder="Autor" required><br>
                </div>

                <div class="form-group">
                    <label for="">Telefono</label>
                    <input value="<?php echo $data->Telefono ?>" name="telefono" type="text" class="form-control" id="FechaPublicacionLibro" placeholder="Cantidad" required><br>
                </div>

                <div class="form-group">
                    <label for="">Correo</label>
                    <input value="<?php echo $data->Correo ?>" name="correo" type="text" class="form-control" id="FechaPublicacionLibro" placeholder="Cantidad" required><br>
                </div>

                <div class="form-group">
                    <label for="">Estado</label>

                    <select class="form-control" name="estadoCliente" id="">
                        <option value="0">Inactivo</option>
                        <option value="1">Activo</option>
                    </select><br>

                </div>

                <div class="d-flex justify-content-around ">

                    <input value="Actualizar" type="submit" class="btn btn-primary"></input>

                    <a class="btn btn-danger  " href="<?php echo URLROOT; ?>Clientes">Cancelar</a>
                </div>


            </form>

        </div>
    </div>
    <br><br><br>


    <?php require_once '../app/views/inc/footer.php'; ?>