<?php require_once APPROOT . "/views/inc/header.php"; ?><br><br><br>



<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-12  ">

            <br><br><br>
            <form method="POST" action="<?php echo URLROOT; ?>" class="text-white  bg-dark p-3 border border-1 rounded w-25 mx-auto ">

                <div class="form-group">
                    <input name="" hidden value="" type="text">
                    <label for="">Fecha Inicial</label>
                    <input value="<?php echo $data->inicioPenalizacion ?>" name="" type="date" class="form-control" id="nombreLibro" placeholder="Fecha Inicio" required> <br>
                </div>


                <div class="form-group  ">
                    <label for="">Fecha fin</label>
                    <input value="" name="<?php echo $data->fin ?>" type="date" class="form-control" id="nombreLibro" placeholder="Fecha Fin" required> <br>
                </div>

                <input hidden value="" type="text">

                <div class="form-group">
                    <label for="">Estado</label>
                    <input name="estado" type="date" class="form-control" id="fechaIngresoLibro" placeholder="Estado" required><br>
                </div>

                <div class="d-flex justify-content-around ">

                    <input value="Actualizar" type="submit" class="btn btn-primary    "></input>

                    <a class="btn btn-danger  " href="<?php echo URLROOT; ?>Penalizaciones">Cancelar</a>
                </div>


            </form>

        </div>
    </div>
    <br><br><br>


    <?php require_once '../app/views/inc/footer.php'; ?>