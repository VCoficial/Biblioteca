<?php require_once APPROOT . "/views/inc/header.php";
session_start(); ?>

<br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">

            <form method="POST" class=" border border-1 rounded bg-dark p-3 mx-auto w-25" action="<?php echo URLROOT; ?>Prestamos/buscarLibroYCLiente">

                <input name="idLibro" type=" text" class="form-control w-75  mx-auto   " id="buscarLibro" placeholder="Buscar Libro" required> <br>
                <input name="idCliente" type=" text" class="form-control w-75   mx-auto " id="buscarCliente" placeholder="Buscar Cliente" required> <br>

                <input type="submit" class="btn btn-success" value="Buscar"></input>

            </form><br>

            <form method="POST" action="<?php echo URLROOT; ?>Prestamos/insertarPrestamos" class="text-white  bg-dark p-3 border border-1 rounded w-25 mx-auto ">

                <div class="form-group">
                    <label for="">Libro</label>
                    <select readonly name="idLibroPrestamo" class="form-control" id="idLibro">
                        <option value="<?php echo $data->idLibro ?>"><?php echo $data->Nombre ?></option>
                    </select><br>
                </div>


                <div class="form-group">
                    <label for="">Cliente</label>
                    <select readonly name="idNombreClientePrestamo" class="form-control" id="idCliente">
                        <option value="<?php echo $data->idCliente ?>"><?php echo $data->Nombre1 ?></option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Fecha de InicioPrestamo</label>
                    <input name="fechaInicioPrestamo" type="date" class="form-control" id="fechaInicioPrestamo" placeholder="Fecha de ingreso"><br>
                </div>

                <div class="form-group">
                    <label for="">Fecha de entrega</label>
                    <input name="fechaFinalPrestamo" type="date" class="form-control" id="fechaEntregaLibro" placeholder="Autor"><br>
                </div>


                <div class="form-group">
                    <label for="">cantidad</label>
                    <input name="cantidadLibros" type="text" class="form-control" id="fechaEntregaLibro" placeholder="Cantidad de libros a llevar"><br>
                </div>

                <div class="form-group">
                    <label for="">Prestador</label>
                    <input readonly name="idPrestador" value="<?php echo $_SESSION['idPrestador'] ?>" type="text" class="form-control" id="idPrestador" placeholder="prestador"><br>
                </div>



                <input value="Registrar Prestamo" type="submit" class="btn btn-primary w-50 m-1  ">



            </form>

        </div>
    </div>


    <?php require_once '../app/views/inc/footer.php'; ?>