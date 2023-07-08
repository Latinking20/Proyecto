<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Female Store formulario</title>
</head>
<body>
    <img src="Img/logo.jpg" style="border-radius: 8px;" width="120" class="logo">
    <center><img src="https://i.ytimg.com/vi/Q_Qws73VMiQ/maxresdefault.jpg" width="55%" alt=""></center>
    <br>
    <center><legend>Login Female Store</legend></center>
     
    <nav class="navtop">
        <h1 style="color:red;">Inicio de sesion</h1>
        <a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>Informción de Usuario</a>
        <a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
    </nav>

    <div class="content">
        <h2>Página de Inicio</h2>
        <p>Hola de nuevo, <?= $_SESSION['name'] ?> !!!</p>
    </div>
    
</body>


</html>