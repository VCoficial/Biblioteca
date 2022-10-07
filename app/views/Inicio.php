<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresa tus datos</title>
    <link rel="icon" href="<?php echo URLROOT; ?>img/Books_icon-icons.com_76879.png">
    <link href="<?php echo URLROOT; ?>css/login.css" rel="stylesheet">

    <link rel="stylesheet" href="">

</head>

<body>
    <div class="login">
        <h1>Bienvenidoo</h1>
        <form method="POST" action="<?php echo URLROOT; ?>Menu/abrirMenu">
            <input id="UsuarioLogin" type="text" name="u" placeholder="Username" required="required" />
            <input id="PasswordLogin" type="password" name="p" placeholder="Password" required="required" />
            <input value="Iniciar Sesión" type="submit" class="btn btn-primary btn-block btn-large"></input>
        </form>
    </div>
</body>

</html>
