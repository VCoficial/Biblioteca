<?php require_once APPROOT . "/views/inc/header.php"; ?>
<br><br><br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">

            <form method="POST" class="text-white  bg-dark p-3 border border-1 rounded w-25 mx-auto ">

                <div class="form-group">

                    <label for="">Identificacion</label>
                    <input type="text" name="identificacion" class="form-control" placeholder="Ingrese la identificacion" id="identifiacion" required> <br>
                </div>


                <div class="form-group">
                    <label for="">Ingrese su Primer nombre</label>
                    <input type="text" name="nombre1Cliente" class="form-control  " id="nombre1" required placeholder="Ingrese su Primer nombre"><br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su segundo nombre</label>
                    <input type="text" name="nombre2Cliente" class="form-control" id="nombre2" required placeholder="Ingrese su segundo nombre"><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su primer apellido</label>
                    <input type="text" name="apellido1Cliente" class="form-control" id="Apellido1" required placeholder="Ingrese su primer apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su segundo apellido</label>
                    <input type="text" name="apellido2Cliente" class="form-control" id="Apellido2" required placeholder="Ingrese su segundo apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" name="telefonoCliente" class="form-control" id="telefonoCliente" required placeholder="Telefono"><br>
                </div>

                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correoCliente" class="form-control" id="correoCliente" required placeholder="Correo"><br>
                </div>



                <div class="d-flex justify-content-around ">

                    <button value="Registar Cliente" type="submit" class="btn btn-primary w-50 ">Registrar Cliente</button>
                    <a class="btn btn-danger  " href="<?php echo URLROOT; ?>Clientes">Cancelar</a>
                </div>


            </form><br><br>

        </div>
    </div>

    <script src="<?php echo URLROOT ?>public/js/registrarClientes.js"></script>
    <?php require_once '../app/views/inc/footer.php'; ?>