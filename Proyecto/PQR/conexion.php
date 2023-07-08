<?php
$servername = "localhost";
$username = "root";
$password = "";
$bd = "proyecto_sena";

// crear conexion
$connect = mysqli_connect($servername, $username, $password, $bd);

//check conection
if (!$connect) {
	die("Error al crear conexion: " . mysqli_connect_error());
}

?>