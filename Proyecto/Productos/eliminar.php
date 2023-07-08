<?php
//llama la conexion
require 'conexion.php';
//conectar a la base de datos escuela con mysqli
$connect = mysqli_connect($servername, $username, $password, $bd);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if ( isset( $_REQUEST['id'])) {
    //crear la consulta
    $query = "DELETE FROM producto WHERE id_producto = " . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($connect, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro borrado correctamente";
        //redireccionar a la pagina principal
        header('Location: update.php');
    } else {
        echo "Error al borrar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>