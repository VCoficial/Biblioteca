<?php require_once APPROOT . "/views/inc/header.php"; ?>


<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">
            <br><br><br>
            <form method="POST" action="<?php echo URLROOT; ?>Clientes/buscarClientes" id="formUsuarios" class="text-white bg-dark p-3 border border-1 rounded text-center w-75 mx-auto ">
                <div class="form-group d-flex justify-content-around ">


                    <input type="text" class="form-control w-50 mx-auto " name="buscarCliente" placeholder="Ingrese la Identificacion del cliente" required> <br>
                    <input type="submit" value="Buscar Cliente" class="btn btn-success text-bg-light w-25 bg-success text-white border border-1 border-dark ">

                </div><br>

                <table class="table table-dark table-hover  table-striped">

                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Identificacion</th>
                        <th scope="col">Penalizacion</th>
                        <th scope="col">PrimerNombre</th>
                        <th scope="col">SegundoNombre</th>
                        <th scope="col">PrimerApellido</th>
                        <th scope="col">segundoApellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                    </tr>



                    <tr>
                        <td><?php echo $data->idCliente  ?></td>
                        <td><?php echo $data->Identificacion ?></td>
                        <td><?php echo $data->Penalizacion ?></td>
                        <td><?php echo $data->Nombre1 ?></td>
                        <td><?php echo $data->Nombre2 ?></td>
                        <td><?php echo $data->Apellido1 ?></td>
                        <td><?php echo $data->Apellido2 ?></td>
                        <td><?php echo $data->telefono ?></td>
                        <td><?php echo $data->Correo ?></td>
                    </tr>



                </table>

            </form><br>
            <a class="btn btn-success" href="<?php echo URLROOT; ?>Clientes">Volver</a>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



    <?php require_once '../app/views/inc/footer.php'; ?>