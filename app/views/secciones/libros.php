<?php require_once APPROOT . "/views/inc/header.php"; ?>

<br><br><br><br><br>
<div class="container-fluid">

    <div class="row text-center">

        <div class="col-md-12 bg-dark mx-auto w-50  table-responsive border border-1 rounded  table-responsive "><br>

            <form id="formbuscarLIbro" class="justify-content-between d-flex " method="POST" action="<?php echo URLROOT; ?>Libros/buscarLibro">
                <a class="btn btn-danger" href="<?php echo URLROOT; ?>Libros/imprimirReporte" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-file-earmark-pdf m-1" viewBox="0 0 16 16">
                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                        <path d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                    </svg></a>
                <a class="btn btn-success w-25" href="<?php echo URLROOT; ?>Libros/abrirRegistrarLibros">Registrar Libro</a>
                <input name="buscarLibro" class="form-control w-25 " type="text">
                <input type="submit" value="Buscar" class="btn btn-success w-25"><br>
            </form>

            <br>
            <table class="table table-dark table-hover table-striped">

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

                        <?php if ($recorrer->Estado == 1) { ?>
                            <td><a class="btn btn-secondary" href="<?php echo URLROOT; ?>Libros/eliminarLibro/<?php echo $recorrer->idLibro ?>">Inhabilitar</a></td>
                        <?php } else { ?>
                            <td><a class="btn btn-success" href="<?php echo URLROOT; ?>Libros/activarLibro/<?php echo $recorrer->idLibro ?>">Habilitar</a></td>
                        <?php } ?>

                    </tr>

                <?php } ?>

            </table>
        </div>

    </div>

</div>

<br><br><br><br><br>

<script src="<?php echo URLROOT ?>public/js/buscarLibro"></script>

<?php require_once '../app/views/inc/footer.php'; ?>