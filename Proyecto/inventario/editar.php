<center><img src="https://img.freepik.com/vector-premium/plantilla-banner-semana-moda-banner-promocion-moda_122059-223.jpg" width="60%" alt="editar"></center>
 <center><h1>Editar Compra</h1></center>

<form action="editar.php" method="post">
    <?php
    
	require 'conexion.php';
    $sql = "SELECT * FROM compras WHERE codigo = " . $_REQUEST['id'];
	$result = mysqli_query($connect, $sql);
    
	
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <label for="id">Codigo:</label>
        <input type="text" name="codigo" id="codigo" value="<?php echo $row['codigo']; ?>">
        <br>
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="nombre_producto" value="<?php echo $row['nombre_producto']; ?>">
        <br>
        <label for="color">Color:</label>
        <input type="text" name="color" id="color" value="<?php echo $row['color']; ?>">
		<br>
		<label for="marca">Marca</label>
		<input type="text" name="marca" id="marca" value="<?php echo $row['marca']; ?>">
		<br>
        <label for="modelo">Modelo</label>
		<input type="text" name="modelo" id="modelo" value="<?php echo $row['modelo']; ?>">
        <br>
        <label for="cantidad">Cantidd</label>
		<input type="text" name="cantidad" id="cantidad" value="<?php echo $row['cantidad']; ?>">
        <br>
        <label for="precio">Precio</label>
		<input type="text" name="precio" id="precio" value="<?php echo $row['precio']; ?>">
        <br>

        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
        <br>
        <input type="submit" class="button" value="Guardar" name="guardar">
		<br>
        <br>
        <?php
    }
    ?>
</form>
<style>
	body{
		background-color: pink;
	}
	form{
		border: 2px solid red;
		text-align: center;
		width: 600px;
		background-color: white;
		margin-left: auto;
		margin-right: auto;
	}
	input{
		margin: 5px;
		padding: 6px;
	}
	label{
		color: red;
		font-size: 20px;
						
	}
    h1{
        color: red;
    }
    .button{
        background-color: blue;
        color: white;
    }


</style>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE compras SET codigo='" . $_POST['codigo'] . "', nombre_producto='" . $_POST['producto'] . "', color='" . $_POST['color'] . "', marca='" . $_POST['marca'] . "', modelo='" . $_POST['modelo'] . "', cantidad='" . $_POST['cantidad'] . "', precio='" . $_POST['precio'] . "' WHERE codigo=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($connect, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: up.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($connect);
?>
