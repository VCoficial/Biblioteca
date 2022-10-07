<?php require_once APPROOT . "/views/inc/header.php"; ?>
<br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">

            <form method="POST" class=" border border-1 rounded bg-dark p-3 mx-auto w-25" action="<?php echo URLROOT; ?>Penalizaciones/buscarPenalizacion">

                <input name="idPrestamo" type=" text" class="form-control w-75   mx-auto " id="buscarCliente" placeholder="Buscar Prestamo" required> <br>

                <input type="submit" class="btn btn-success" value="Buscar"></input>

            </form><br>


            <form id="formRegistrarPenalizaciones" class="text-white  bg-dark p-3 border border-1 rounded w-25 mx-auto ">

                <input name="idClienteEstado" hidden type="text" value="<?php echo $data->idCliente ?>">

                <div class="form-group">

                    <input name="idPrestamo" hidden value="<?php echo $data->idPrestamo ?>" type="text">

                    <label for="">inicioPenalizacion</label>
                    <input type="date" name="inicioFecha" class="form-control" placeholder="Ingrese la identificacion" id="identifiacion" required> <br>
                </div>


                <div class="form-group">
                    <label for="">finPenalizacion</label>
                    <input type="date" name="finFecha" class="form-control  " id="nombre1" required placeholder="Ingrese su Primer nombre"><br>
                </div>
                <div class="form-group">
                    <label for="">nombre Cliente</label>
                    <input value="<?php echo $data->Nombre1 ?>" type="text" name="nomCliente" class="form-control" id="nombre2" required placeholder="Ingrese su segundo nombre"><br>
                </div>

                <div class="form-group">
                    <label for="">prestamo</label>
                    <input value="<?php echo $data->FechaInicio ?> - <?php echo $data->FechaEntrega ?>" type="text" name="prestamo" class="form-control" id="Apellido1" required placeholder="Ingrese su primer apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">idUsuario</label>
                    <input value="<?php echo $_SESSION["idPrestador"] ?>" readonly type="text" name="idprestador" class="form-control" id="Apellido2" required placeholder="Ingrese su segundo apellido"><br>
                </div>


                <div class="d-flex justify-content-around ">

                    <button id="registrarPrestamo" value="Registar Prestamo" type="submit" class="btn btn-primary w-50 ">Registrar Penalizacion</button>
                    <a class="btn btn-danger  " href="<?php echo URLROOT; ?>Penalizaciones">Cancelar</a>
                </div>


            </form><br><br>

        </div>
    </div>

    <script src="<?php echo URLROOT ?>public/js/registrarPenalizaciones.js"></script>
    <?php require_once '../app/views/inc/footer.php'; ?>