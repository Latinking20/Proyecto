 <center><img src="https://img.freepik.com/vector-premium/plantilla-banner-semana-moda-banner-promocion-moda_122059-223.jpg" width="60%" alt="editar"></center>
 <center><h1>Editar Registros</h1></center>

<form action="editar.php" method="post">
    <?php
    
	require 'conexion.php';
    $sql = "SELECT * FROM pqr WHERE documento = " . $_REQUEST['id'];
	$result = mysqli_query($connect, $sql);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <label for="documento">Documento</label>
        <input type="text" name="documento" id="documento" value="<?php echo $row['documento']; ?>">
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $row['apellido']; ?>">
        <br>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>">
		<br>
		<label for="telefono">Telefono</label>
		<input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>">
		<br>
        <label for="mensaje">Mensaje</label>
		<input type="text" name="mensaje" id="mensaje" value="<?php echo $row['mensaje']; ?>">
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
    $query = "UPDATE pqr SET documento='" . $_POST['documento'] . "', nombre='" . $_POST['nombre'] . "', apellido='" . $_POST['apellido'] . "', direccion='" . $_POST['direccion'] . "', telefono='" . $_POST['telefono'] . "', mensaje='" . $_POST['mensaje'] . "' WHERE documento=" . $_REQUEST['id'];
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
