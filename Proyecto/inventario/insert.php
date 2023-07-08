<center><h1>Datos guardados exitosamente</h1></center>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Verificar si se ha enviado el formulario
 
    // Obtener los valores enviados desde el formulario
    $codigo = isset($_GET['codigo']) ? $_GET['codigo'] : '';
    $nombre = isset($_GET['nombre_producto']) ? $_GET['nombre_producto'] : '';
    $color = isset($_GET['color']) ? $_GET['color'] : '';
    $marca = isset($_GET['marca']) ? $_GET['marca'] : '';
    $modelo = isset($_GET['modelo']) ? $_GET['modelo'] : '';
    $unidad = isset($_GET['cantidad']) ? $_GET['cantidad'] : '';
    $precio = isset($_GET['precio']) ? $_GET['precio'] : '';

    echo "<h2>Informacion Recibida desde PHP </h2>";
    echo "El id de la compra  es: " . $codigo . "<br>";
    echo "El nombre del producto recibido es: " . $nombre . "<br>";
    echo "El color recibido es: " . $color . "<br>";
    echo "La marca recibida es: " . $marca . "<br>";
    echo "El modelo recibido es: " . $modelo . "<br>";
    echo "La cantidad recibido es: " . $unidad . "<br>";
    echo "El precio recibido es: " . $precio . "<br>";
    
    
                       
                    

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
    $sql = "INSERT INTO compras (codigo, nombre_producto, color, marca, modelo, cantidad, precio) VALUES ('$codigo', '$nombre', '$color', '$marca', '$modelo', '$unidad','$precio' )";

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