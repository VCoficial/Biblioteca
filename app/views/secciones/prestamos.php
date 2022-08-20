<?php require_once '../app/views/inc/header.php';
?>

<br><br><br><br><br>
<div class="container-fluid  ">

    <div class="row text-center ">

        <div class="col-md-12 bg-dark mx-auto w-50  table-responsive border border-1 rounded    table-responsive"><br>

            <div class="justify-content-around d-flex  ">
                <a class="btn btn-success w-25 " href="<?php echo URLROOT; ?>Prestamos/abrirRegistrarPrestamos">Registrar Prestamos</a>
                <a href="<?php echo URLROOT; ?>Libros/abrirBuscarLibro" class="btn btn-success ml-2 text-white border border-1 border-dark  w-50 ">Buscar Libro</a><br>
            </div>


            <br>
            <table class="table table-dark table-hover  table-striped">

                <tr>
                    <th scope="col">idPrestamo</th>
                    <th scope="col">idLibro</th>
                    <th scope="col">idCliente</th>
                    <th scope="col">FechaInicioPrestamo</th>
                    <th scope="col">FechaEntregaLibro</th>
                    <th scope="col">Prestador</th>

                </tr>

            </table>
        </div>


    </div>

</div>



<?php require_once '../app/views/inc/footer.php'; ?>