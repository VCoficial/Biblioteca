<?php require_once '../app/views/inc/header.php'; ?>

<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">
            <br>
            <form method="POST" id="formUsuariosEditar" class="text-white bg-dark p-3 border border-1 rounded  w-25 mx-auto ">
                <div class="form-group">

                    <input hidden value="<?php echo $data->idUsuarios ?>" type="text" class="form-control" name="id" placeholder="Ingrese su primer nombre" required> <br>

                    <label for="">Ingrese su primer nombre</label>
                    <input value="<?php echo $data->Nombre1 ?>" type="text" class="form-control" name="nombre1" placeholder="Ingrese su primer nombre" required> <br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su segundo nombre</label>
                    <input value="<?php echo $data->Nombre2 ?>" type=" text" class="form-control  " name="nombre2" placeholder="Ingrese su segundo nombre"><br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su primer apellido</label>
                    <input value="<?php echo $data->Apellido1 ?>" type=" text" class="form-control" name="Apellido1" placeholder="Ingrese su primer apellido" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su segundo apellido</label>
                    <input value="<?php echo $data->Apellido2 ?>" type=" text" class="form-control" name="Apellido2" placeholder="Ingrese su segundo apellido" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su telefono</label>
                    <input value="<?php echo $data->Telefono ?>" type="text" class="form-control" name="telefonoUsuario" placeholder="Ingrese su telefono" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su Correo</label>
                    <input value="<?php echo $data->correo ?>" type="email" class="form-control" name="correoUsuario" placeholder="Ingrese su Correo" required><br>
                </div>

                <div class="form-group">
                    <label for="">Crear Usuario</label>
                    <input value="<?php echo $data->Usuario ?>" type="text" class="form-control" name="usuario" placeholder="Crear Usuario" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese Password</label>
                    <input value="<?php echo $data->Passwordd ?>" type="password" class="form-control" name="password" placeholder="Ingrese Password" required><br>
                </div>

                <div class="form-group">
                    <label for="">Seleccione el Rol</label>
                    <select require class="form-control" name="rol">
                        <option value="<?php echo $data->idRoles ?>"><?php echo $data->Roles ?></option>
                        <option value="1">Administrador</option>
                        <option value="2">Bibliotecario</option>
                        <option value="3">Inactivo</option>
                    </select>
                </div>
                <br>
                <button id="btnActualizarUsuarios" id="enviarDatos" type="submit" class="btn btn-primary w-50 ">Actualizar</button>
            </form>
        </div>
    </div>
</div>





<script src="<?php echo URLROOT ?>public/js/usuariosActualizar.js"></script>


<?php require_once APPROOT . "/views/inc/footer.php"; ?>