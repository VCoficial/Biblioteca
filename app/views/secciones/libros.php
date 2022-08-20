<?php require_once APPROOT . "/views/inc/header.php"; ?>

<br><br><br><br><br>
<div class="container-fluid  ">

    <div class="row text-center ">

        <div class="col-md-12 bg-dark mx-auto w-50  table-responsive border border-1 rounded    table-responsive "><br>

            <form class="justify-content-between d-flex " method="POST" action="<?php echo URLROOT; ?>Libros/buscarLibro">
                <a class="btn btn-success w-25 " href="<?php echo URLROOT; ?>Libros/abrirRegistrarLibros">Registrar Libro</a>
                <input name="buscarLibro" class="form-control w-25 " type="text">
                <input type="submit" value="Buscar" class="btn btn-success text-white border border-1 border-dark  w-25 "><br>
            </form>

            <br>
            <table class="table table-dark table-hover   table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NombreLibro</th>
                    <th scope="col">idEditorial</th>
                    <th scope="col">FechaDeIngreso</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Estado</th>


                </tr>

                <?php foreach ($data as $recorrer) {  ?>
                    <tr>

                        <td><?php echo $recorrer->idLibro ?></td>
                        <td><?php echo $recorrer->Nombre ?></td>
                        <td><?php echo $recorrer->Editoriales_idEditoriales ?></td>
                        <td><?php echo $recorrer->fechaDeIngreso ?></td>
                        <td><?php echo $recorrer->Autor ?></td>
                        <td><?php echo $recorrer->Cantidad ?></td>
                        <td><?php echo $recorrer->Estado ?></td>
                        <td><a class="btn btn-primary" href="<?php echo URLROOT; ?>Libros/editarLibro/<?php echo $recorrer->idLibro ?>">Editar</a></td>

                        <?php if($recorrer->Estado == 1){?>
                             <td><a class="btn btn-secondary" href="<?php echo URLROOT; ?>Libros/eliminarLibro/<?php echo $recorrer->idLibro ?>">Inhabilitar</a></td>
                        <?php }else{ ?>
                            <td><a class="btn btn-success" href="<?php echo URLROOT; ?>Libros/activarLibro/<?php echo $recorrer->idLibro ?>">Habilitar</a></td>    
                        <?php } ?>


                        <td><a class="btn btn-danger" href="<?php echo URLROOT; ?>Libros/eliminarLibro/<?php echo $recorrer->idLibro ?>">Borrar</a></td>

                    </tr>

                <?php } ?>



            </table>
        </div>


    </div>


    <!-- Button trigger modal -->
    <!-- Button trigger modal -->


    <!-- Modal -->


</div>

<br><br><br><br><br><br><br><br><br>



<?php require_once '../app/views/inc/footer.php'; ?>