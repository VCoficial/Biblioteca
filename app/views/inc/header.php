<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <link rel="icon" href="<?php echo URLROOT; ?>img/Books_icon-icons.com_76879.png">
  <title><?php echo SITENAME ?></title>
  <link href="<?php echo URLROOT; ?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Favicons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>css/menu.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>css/estilo.css">

</head>

<body>

  <?php
  error_reporting(0);
  session_start();
  ?>

<nav class="navbar navbar-expand-lg text-white navbar-dark">
    <div class="container-fluid mt-3">

    <?php
    if ($_SERVER["REQUEST_URI"]=="/Biblioteca/%20Menu"){
    ?>
    <b><a img src="<?php echo URLROOT; ?>img/welcome.png" class="navbar-brand text-white m-3" href="<?php echo URLROOT; ?> Menu ">Welcome</a></b>
    <?php } else { ?>
    <b><a class="navbar-brand text-white m-3" href="<?php echo URLROOT; ?> Menu "><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
  <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</svg></a></b>
    <?php }?>

      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white " aria-current="page"><?php echo $_SESSION["iniciar"] ?></a>
          </li>
          <li class="nav-item">
          <a class="nav-link text-white text-opacity-25 disabled" aria-current="page"><?php
          //Zona horaria
          date_default_timezone_set('America/Bogota');
          echo 'Hoy es '.date('d/M/Y')
          ?></a>
          </li>
        </ul>
        <a class="btn btn-danger" href="<?php echo URLROOT;?>Inicio">Cerrar Sesión</a>
      </div>
    </div>
  </nav>
  <hr class="text-white border-1 border">