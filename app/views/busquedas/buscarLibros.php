<?php require_once APPROOT . "/views/inc/header.php"; ?>


<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">
            <br><br><br>
            <form method="POST" action="<?php echo URLROOT; ?>Libros/buscarLibro " id="formUsuarios" class="text-white bg-dark p-3 border border-1 rounded text-center w-50 mx-auto ">
                <div class="form-group d-flex justify-content-around ">


                    <input type="text" class="form-control w-50 mx-auto " name="buscarLibro" placeholder="Ingrese el nombre del libro" required> <br>
                    <input type="submit" value="Buscar libro" class="btn btn-success text-bg-light w-25 bg-success text-white border border-1 border-dark ">

                </div><br>

                <table class="table table-dark table-hover  table-striped">

                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NombreLibro</th>
                        <th scope="col">idEditorial</th>
                        <th scope="col">FechaDeIngreso</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Cantidad</th>
                    </tr>


                    <?php foreach ($data as $recorrer) { ?>
                        <tr>
                            <td><?php echo $recorrer->idLibro ?></td>
                            <td><?php echo $recorrer->Nombre ?></td>
                            <td><?php echo $recorrer->Editoriales_idEditoriales ?></td>
                            <td><?php echo $recorrer->fechaDeIngreso ?></td>
                            <td><?php echo $recorrer->Autor ?></td>
                            <td><?php echo $recorrer->Cantidad ?></td>
                        </tr>
                    <?php } ?>


                </table>

            </form><br>
            <a class="btn btn-success" href="<?php echo URLROOT; ?>Libros">Volver</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <?php require_once '../app/views/inc/footer.php'; ?>