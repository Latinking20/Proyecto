<?php

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}


$servername = 'localhost';
$username = 'root';
$password = '';
$bd = 'proyecto_sena';

// conexion a la base de datos

$conexion = mysqli_connect($servername, $username, $password, $bd);

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$stmt = $conexion->prepare('SELECT password, email FROM cuenta WHERE id = ?');





$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    
</head>

<body class="loggedin">
    <nav class="navtop">
        <h1 style="color:white;">Inicio de sesion</h1>
        <a href="inicio.php" style="color:white;">Inicio</a>
        <a href="perfil.php" style="color:white;"><i class="fas fa-user-circle"></i>Información de Usuario</a>
        <a href="cerrar-sesion.php" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesion</a>
    </nav>
    <div class="content">

        <h2>Información del Usuario</h2>
        <div>
            <p>
                La siguiente es la información registrada de tu cuenta
            </p>
            <table>
                <tr>
                    <td>Usuario:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                </tr>
            </table>



        </div>


    </div>



    </nav>

</body>

</html>