<center><h1>Datos guardados exitosamente</h1></center>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Verificar si se ha enviado el formulario
 
    // Obtener los valores enviados desde el formulario
    $id = isset($_GET['id_cliente']) ? $_GET['id_cliente'] : '';
    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
    $apellido = isset($_GET['apellido']) ? $_GET['apellido'] : '';
    $direccion = isset($_GET['direccion']) ? $_GET['direccion'] : '';
    $telefono = isset($_GET['telefono']) ? $_GET['telefono'] : '';
    $saldo = isset($_GET['saldo']) ? $_GET['saldo'] : '';
    $credito = isset($_GET['credito']) ? $_GET['credito'] : '';

    echo "<h2>Informacion Recibida desde PHP </h2>";
    echo "El id del cliente recibido es: " . $id . "<br>";
    echo "El nombre  recibido es: " . $nombre . "<br>";
    echo "El apellido  recibido es: " . $apellido . "<br>";
    echo "La direccion  recibida es: " . $direccion . "<br>";
    echo "El telefono  recibido es: " . $telefono . "<br>";
    echo "El saldo  recibido es: " . $saldo . "<br>";
    echo "El credito  recibido es: " . $credito . "<br>";
    
                       
                    

    // Conexión a la base de datos
    $servidor = 'localhost';
    $usuario = 'root'; // uusuario de la base de datos
    $contrasena = ''; // contraseña de la base de datos
    $nombreBaseDatos = 'proyecto_sena'; // nombre de tu base de datos

    $conexion = new mysqli($servidor, $usuario, $contrasena, $nombreBaseDatos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }
     if(isset($_GET['UN-CAMPO-DEL-FORMULARIO'])) {
     }
    // Preparar la consulta SQL
    $sql = "INSERT INTO cliente (id_cliente, nombre, apellido, direccion, telefono, saldo, credito) VALUES ('$id', '$nombre', '$apellido', '$direccion', '$telefono', '$saldo', '$credito' )";

    // Ejecutar la consulta SQL
    if ($conexion->query($sql) === TRUE) {
        echo "Los datos se han guardado correctamente en la base de datos.";
    } else {
        echo "Error al guardar los datos: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}

?>
<style>
    body{
        background-color: pink;
    }
    h1{
        color: red;
    }
    
</style>