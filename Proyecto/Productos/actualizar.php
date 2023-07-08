<center><img src="https://img.freepik.com/vector-premium/plantilla-banner-semana-moda-banner-promocion-moda_122059-223.jpg" width="60%" alt="editar"></center>
 <center><h1>Editar Producto</h1></center>

<form action="actualizar.php" method="post">
    <?php
    
	require 'conexion.php';
    $sql = "SELECT * FROM producto WHERE id_producto = " . $_REQUEST['id'];
	$result = mysqli_query($connect, $sql);
    
	
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <label for="id">Id:</label>
        <input type="text" name="id_producto" id="id_producto" value="<?php echo $row['id_producto']; ?>">
        <br>
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="nombre_producto" value="<?php echo $row['nombre_producto']; ?>">
        <br>
        <label for="color">Color:</label>
        <input type="text" name="color" id="color" value="<?php echo $row['color']; ?>">
		<br>
		<label for="marca">Marca</label>
		<input type="text" name="Marca" id="Marca" value="<?php echo $row['Marca']; ?>">
		<br>
        <label for="modelo">Modelo</label>
		<input type="text" name="modelo" id="modelo" value="<?php echo $row['modelo']; ?>">
        <br>
        <label for="precio">Precio</label>
		<input type="text" name="precio" id="precio" value="<?php echo $row['precio']; ?>">
        <br>
        <label for="unidades">Unidades</label>
		<input type="text" name="unidades" id="unidades" value="<?php echo $row['unidades']; ?>">
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
    $query = "UPDATE producto SET id_producto='" . $_POST['id_producto'] . "', nombre_producto='" . $_POST['producto'] . "', color='" . $_POST['color'] . "', Marca='" . $_POST['Marca'] . "', modelo='" . $_POST['modelo'] . "', precio='" . $_POST['precio'] . "', unidades='" . $_POST['unidades'] . "' WHERE id_producto=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($connect, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: update.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($connect);
?>
