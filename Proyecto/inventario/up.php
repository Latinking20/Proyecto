<?php
	
	
	
	//quitar notificaciones de error de php
    error_reporting(0);
    //importa las variables de conexion
    require 'conexion.php';
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($servername, $username, $password, $bd);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
 <center><img src="https://img.freepik.com/vector-gratis/plantilla-banner-venta-horizontal_23-2148897328.jpg" width="60%" alt="historial"></center>

<!-- crear una tabla con los datos de la tabla PQR -->
 <center><h1>Historial Compras Registradas</h1></center>
<table border="1">
    <tr>
        <th>Codigo</th>
        <th>Producto</th>
        <th>Color</th>
        <th>Marca</th>
		<th>Modelo</th>
		<th>Cantidad</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
    <?php
     if(isset($_GET['UN-CAMPO-DEL-FORMULARIO'])) {
     }
    //crear la consulta
    $query = "SELECT * FROM compras";
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    ?>
    <tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $row['codigo']; ?></td>
            <td><?php echo $row['nombre_producto']; ?></td>
            <td><?php echo $row['color']; ?></td>
			<td><?php echo $row['marca']; ?></td>
			<td><?php echo $row['modelo']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><strong><a href="editar.php?id=<?php echo $row['codigo'];?>">Editar</a> | 
            <a href="eliminar.php?id=<?php echo $row['codigo'];?>">Eliminar</a></strong></td>
        </tr>
        <?php
    }
    ?>
</table>
<center><h2>Reporte en linea</h2></center>
<br>
<hr>
<form action="excel.php" method="GET">
        <br>
        <table>
            <td>
                <tr>
                    <center><legend>Female Report</legend></center>
                </tr>
            </td>
        <br>
        <label for="reporte">
            <input type="submit" class="boton" value="Generar">
            
        </label>
    </table>
    </form>
<style>
	body{
		background-color: pink;
	}
	table{
		margin-left: auto;
		margin-right: auto;
        background-color: white;
	}
    h1{
        color: red;
    }
    a{
        background-color: red;
        color: white;
        font-size: 18px;
    }
    h2{
        color: red;
    }
    legend{
        color: red;
        font-size: 25px;
    }
    form {
            background-color: white;
            border: 2px solid;
            color: red;
            font-size: 20px;
            width: 400px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            position: relative;
    }
    .boton {
            background-color: blue;
            height: 25px;
            width: 150px;
            color: white;
            font-size: 18px;
            border-radius: 7px;
        }
</style>
<?php
//cerrar la conexion
mysqli_close($con);
?>
