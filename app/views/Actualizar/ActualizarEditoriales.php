<?php require_once '../app/views/inc/header.php'; ?>

<br><br>
<div class="container  ">

    <div class="row text-center ">
        <div class="col-md-12  ">
            <form method="POST" action="<?php echo URLROOT;?>Editoriales/actualizarEditorial" id="formUsuarios" class="text-white bg-dark p-3 border border-1 rounded  w-50 mx-auto ">
                
                <input name="idEditorial" hidden value="<?php echo $data->idEditoriales?>"  type="text">

                <div class="form-group">
                    <label for="">Nombre Editorial</label>
                    <input value="<?php echo $data->NombreEditorial?>"  type="text" class="form-control" name="nombre1" placeholder="Ingrese su primer nombre" required> <br>
                </div>

                <div class="form-group">
                    <label for="">Estado</label>

                    <select class="form-control" name="estadoEditorial" id="">
                        <option value="1">Activo</option>
                        <option value="0">inactivo</option>
                    </select><br>

                    
                </div>

            
                <input id="enviarDatos" value="Actualizar" type="submit" class="btn btn-primary w-50 "></input>
            </form>
        </div>

    </div>
                
    <?php require_once APPROOT . "/views/inc/footer.php"; ?>