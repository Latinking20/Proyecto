<center><h1>Datos guardados exitosamente</h1></center>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Verificar si se ha enviado el formulario
 
    // Obtener los valores enviados desde el formulario
    $id = isset($_GET['id_producto']) ? $_GET['id_producto'] : '';
    $nombre = isset($_GET['nombre_producto']) ? $_GET['nombre_producto'] : '';
    $color = isset($_GET['color']) ? $_GET['color'] : '';
    $marca = isset($_GET['marca']) ? $_GET['marca'] : '';
    $modelo = isset($_GET['modelo']) ? $_GET['modelo'] : '';
    $precio = isset($_GET['precio']) ? $_GET['precio'] : '';
    $unidades = isset($_GET['unidades']) ? $_GET['unidades'] : '';

    echo "<h2>Informacion Recibida desde PHP </h2>";
    echo "El id del producto recibido es: " . $id . "<br>";
    echo "El nombre del producto recibido es: " . $nombre . "<br>";
    echo "El color del producto recibido es: " . $color . "<br>";
    echo "La marca del producto recibida es: " . $marca . "<br>";
    echo "El modelo del producto recibido es: " . $modelo . "<br>";
    echo "El precio del producto recibido es: " . $precio . "<br>";
    echo "Las unidades del producto recibidas son: " . $unidades . "<br>";
    
                       
                    

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
    $sql = "INSERT INTO producto (id_producto, nombre_producto, color, marca, modelo, precio, unidades) VALUES ('$id', '$nombre', '$color', '$marca', '$modelo', '$precio', '$unidades' )";

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