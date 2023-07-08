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
 <center><img src="https://www.telemundo.com/sites/nbcutelemundo/files/images/promo/article/2023/02/07/sacos_en_tendencia_para_mujer_que_puedes_llevar_todo_el_ano-_formal_o_informal_estas_piezas_son_perfectas_para_darle_un_toque_sofisticado_a_todo_atuendo_que_quieras_utilizar_durante_este_2023.jpg" width="60%" alt="historial"></center>


 <center><h1>Historial de Clientes</h1></center>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Direccion</th>
		<th>Telefono</th>
		<th>Saldo</th>
        <th>Credito</th>
        <th>Acciones</th>
    </tr>
    <?php
     if(isset($_GET['UN-CAMPO-DEL-FORMULARIO'])) {
     }
    //crear la consulta
    $query = "SELECT * FROM cliente";
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    ?>
    <tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $row['id_cliente']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
			<td><?php echo $row['direccion']; ?></td>
			<td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['saldo']; ?></td>
            <td><?php echo $row['credito']; ?></td>
            <td><strong><a href="actualiza.php?id=<?php echo $row['id_cliente'];?>">Editar</a> | 
            <a href="eliminar.php?id=<?php echo $row['id_cliente'];?>">Eliminar</a></strong></td>
        </tr>
        <?php
    }
    ?>
</table>
<center><h2>Reporte en linea</h2></center>
<br>
<hr>
<form action="reporte.php" method="GET">
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
