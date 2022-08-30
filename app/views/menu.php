<?php require_once '../app/views/inc/header.php'; ?>

<?php
session_start();
?>

<div class="container">
    <br><br>
    <?php
    if ($_SESSION["rol"] == "Administrador") {
    ?>
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card mx-auto p-2 border border-1 bg-dark border-white" style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Usuarios</h5>
                        <a href="<?php echo URLROOT; ?>Usuarios" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-4">
                <div class="card p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/libro.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Libros</h5>
                        <a href="<?php echo URLROOT; ?>Libros" class="btn btn-primary">Ingresarrrrrrrrr</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-4">
                <div class="card p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/libro-abierto.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Editoriales</h5>
                        <a href="<?php echo URLROOT; ?>editoriales" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row text-center">
            <div class="col-md-4">
                <div class="card mx-auto p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/2534/2534204.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Clientes</h5>
                        <a href="<?php echo URLROOT; ?>Clientes" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-4">
                <div class="card mx-auto p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/block.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Penalizaciones</h5>
                        <a href="<?php echo URLROOT; ?>Penalizaciones" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-4">
                <div class="card mx-auto p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/pedir-prestado.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Prestamos</h5>
                        <a href="<?php echo URLROOT; ?>prestamos" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>

    <?php } else { ?>

        <div class="row text-center">
            <div class="col-md-4">
                <div class="card p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/libro.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Libros</h5>
                        <a href="<?php echo URLROOT; ?>Libros" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-4">
                <div class="card mx-auto p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="https://cdn-icons-png.flaticon.com/512/2534/2534204.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Clientes</h5>
                        <a href="<?php echo URLROOT; ?>Clientes" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-4">
                <div class="card p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/libro-abierto.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Editoriales</h5>
                        <a href="<?php echo URLROOT; ?>editoriales" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-6">
                <div class="card mx-auto p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/block.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Penalizaciones</h5>
                        <a href="<?php echo URLROOT; ?>Penalizaciones" class="btn btn-primary">Ingresar</a>
                    </div>
                </div><br>
            </div>

            <div class="col-md-6">
                <div class="card mx-auto p-2 mx-auto bg-dark border border-1  border-white " style="width: 18rem;">
                    <img src="<?php echo URLROOT; ?>img/pedir-prestado.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white ">Prestamos</h5>
                        <a href="<?php echo URLROOT; ?>prestamos" class="btn btn-primary">Ingresar</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php } ?>

<?php require_once '../app/views/inc/footer.php'; ?>