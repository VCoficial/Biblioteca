<?php require_once '../app/views/inc/header.php'; ?>



<br><br>
<div class="container  ">

    <div class="row text-center ">
        <div class="col-md-6  ">
            <form method="POST" id="formEditoriales" class="text-white bg-dark p-3 border border-1 rounded  w-75 mx-auto ">
                <div class="form-group">
                    <label for="">Nombre Editorial</label>
                    <input type="text" class="form-control" name="nombre1" placeholder="Ingrese su primer nombre" required> <br>
                </div>
                <button id="enviarDatos" value="Registrar" type="submit" class="btn btn-primary w-50 ">Registrar</button>
            </form><br>
        </div>

        <div class="col-md-6 bg-dark border border-1 rounded  table-responsive ">
            <br>
            <table id="mitabla" class="table table-dark table-hover  table-striped">
                <div class="d-flex justify-content-around ">
                    <a class="btn btn-success" href="<?php echo URLROOT; ?>Editoriales/imprimirReporte">Reporte</a>
                    <form class="" method="POST" action="<?php echo URLROOT; ?>Editoriales/buscarEditorial">
                        <input name="buscar" class="form-control w-50 " type="text">
                        <input value="Buscar" class=" btn  btn-success w-25 form-control" type="submit">
                    </form>
                </div><br>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Estado</th>
                    <th>Opciones</th>
                </tr>
                <?php foreach ($data as $recorrer) :   ?>
                    <tr>
                        <td><?php echo $recorrer->idEditoriales; ?></td>
                        <td><?php echo $recorrer->NombreEditorial; ?></td>
                        <td><?php echo $recorrer->Estado; ?></td>
                        <td>
                            <a class="btn btn-primary  " href="<?php echo URLROOT; ?>Editoriales/abrirActualizarEditorial/<?php echo $recorrer->idEditoriales; ?>">
                                Editar
                            </a>
                        </td>
                    </tr>

                <?php endforeach ?>

            </table>
        </div>
    </div>

    <script src="<?php echo URLROOT ?>public/js/registrarEditoriales.js"></script>
    <?php require_once APPROOT . "/views/inc/footer.php"; ?>