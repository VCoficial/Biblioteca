<?php require_once '../app/views/inc/header.php'; ?>


<br><br><br><br>
<div class="container-fluid">
    <div class="row text-center ">
        <div class="col-md-12 bg-dark mx-auto w-75  table-responsive border border-1 rounded table-responsive"><br>
            <div class="justify-content-around d-flex  ">
                <a class="btn btn-success w-25 " href="<?php echo URLROOT; ?>Clientes/abrirRegistrarClientes">Registrar Cliente</a>
                <a href="<?php echo URLROOT; ?>Clientes/abrirBuscarClientes" class="btn btn-success ml-2 text-white border border-1 border-dark  w-50 ">Buscar Cliente</a><br>
            </div>

            <br>
            <table id="mitabla" class="table table-dark table-hover  table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Identificacion</th>   
                    <th scope="col">PrimerNombre</th>
                    <th scope="col">SegundoNombre</th>
                    <th scope="col">PrimerApellido</th>
                    <th scope="col">segundoApellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">VecesPenalizado</th>
                </tr>

                <?php foreach ($data as $recorrer) {  ?>

                    <tr>
                        <td><?php echo $recorrer->idCliente ?></td>
                        <td><?php echo $recorrer->Identificacion ?></td>

                        <td><?php echo $recorrer->Nombre1 ?></td>
                        <td><?php echo $recorrer->Nombre2 ?></td>
                        <td><?php echo $recorrer->Apellido1 ?></td>
                        <td><?php echo $recorrer->Apellido2 ?></td>
                        <td><?php echo $recorrer->Telefono ?></td>
                        <td><?php echo $recorrer->Correo ?></td>
                        <td><?php echo $recorrer->Estado ?></td>
                        <td><?php echo $recorrer->vecesPenalizado ?></td>

                        
                        <td><a class="btn btn-primary" href="<?php echo URLROOT; ?>Clientes/abrirEditarClientes/<?php echo $recorrer->idCliente ?>">Actualizar</a></td>

                    </tr>

                <?php } ?>

            </table>
        </div>


    </div><br><br>

    <?php require_once '../app/views/inc/footer.php'; ?>