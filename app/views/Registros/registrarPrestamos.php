<?php require_once APPROOT . "/views/inc/header.php";
session_start(); ?>

<br>

<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-6 ">

            <form method="POST" class=" border border-1 rounded bg-dark p-3 mx-auto w-50" id="formBuscarLibroYCliente">

                <input name="idLibro" type=" text" class="form-control w-75  mx-auto   " id="buscarLibro" placeholder="Buscar Libro" required> <br>
                <input name="idCliente" type=" text" class="form-control w-75   mx-auto " id="buscarCliente" placeholder="Buscar Cliente" required> <br>

                <button id="buscarLibroYCliente" type="submit" class="btn btn-success" value="Buscar">Buscar</button>

            </form><br>

            <form id="formAgregarLibro" method="POST" class="text-white  bg-dark p-3 border border-1 rounded w-50 mx-auto ">

                <div class="form-group">
                    <label for="">Libro</label>
                    <select readonly name="idLibroPrestamo" class="form-control" id="idLibro">
                        <option value="" id="idtraerLibro"></option>
                    </select><br>
                </div>


                <div class="form-group">
                    <label for="">Cliente</label>
                    <select readonly name="idNombreClientePrestamo" class="form-control" id="idCliente">
                        <option id="idtraerCliente"></option>
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
                    <input name="cantidadLibros" type="text" class="form-control" id="cantidadLibros1" placeholder="Cantidad de libros a llevar"><br>
                </div>

                <div class="form-group">
                    <label for="">Prestador</label>
                    <input readonly name="idPrestador" value="<?php echo $_SESSION['idPrestador'] ?>" type="text" class="form-control" id="idPrestador" placeholder="prestador"><br>
                </div>



                <button id="agregarLibrosPrestamos1" value="Registrar Prestamo" type="submit" class="btn btn-primary w-50 m-1  ">Agregar</button>



            </form>

        </div>


        <div class="col-md-6">

            <form method="post" id="insertarDatos">



                <table id="mitablita" class="table table-dark table-hover   table-striped">

                    <tr>
                        <th scope="col">Libro</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">fechaInicioPrestamo</th>
                        <th scope="col">fechaEmtrega</th>
                        <th scope="col">cantidadLibros</th>
                        <th scope="col">Prestador</th>

                    </tr>

                </table>

                <button id="insertarDatos1" type="submit" class="btn btn-success">Insertar</button>
            </form>
        </div>

    </div>
    <script src="<?php echo URLROOT ?>public/js/agregarLibrosPrestamos.js"></script>
    <script src="<?php echo URLROOT ?>public/js/buscarLibroYCliente.js"></script>


    <?php require_once '../app/views/inc/footer.php'; ?>