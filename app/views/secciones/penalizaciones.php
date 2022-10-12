<?php require_once '../app/views/inc/header.php'; ?>


<br><br><br><br><br>
<div class="container-fluid">

    <div class="row text-center">

        <div class="col-md-12 bg-dark mx-auto w-75  table-responsive border border-1 rounded    table-responsive"><br>

            <div class="justify-content-around d-flex">
                <a class="btn btn-success" href="<?php echo URLROOT; ?>Penalizaciones/abrirRegistrarPenalizacion">Registrar Penalizacion</a>
                <a href="<?php echo URLROOT; ?>Clientes/abrirBuscarClientes" class="btn btn-success">Buscar Cliente</a><br>
            </div>

            <br>
            <table class="table table-dark table-hover table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">InicioPenalizacion</th>
                    <th scope="col">finPenalizacion</th>
                    <th scope="col">idPrestamo</th>
                    <th scope="col">idUsuario</th>
                </tr>

                <?php foreach ($data as $recorrer) {  ?>

                    <tr>
                        <td><?php echo $recorrer->idPenalizacion  ?></td>
                        <td><?php echo $recorrer->inicioPenalizacion ?></td>
                        <td><?php echo $recorrer->finPenalizacion ?></td>
                        <td><?php echo $recorrer->idPrestamo  ?></td>
                        <td><?php echo $recorrer->idUsuarios  ?></td>
                    </tr>

                <?php } ?>

            </table>

            <div class="m-3">
                <?php for ($i = 1; $i <= $recorrer->scalar; $i++) { ?>
                    <a class="btn btn-primary" href=" <?php echo URLROOT; ?>Penalizaciones ?listar=<?php echo $i ?>"> <?php echo $i ?> </a>
                <?php } ?>
            </div>

        </div>


    </div><br><br><br><br>

    <?php require_once '../app/views/inc/footer.php'; ?>