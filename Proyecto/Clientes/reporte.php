<?php
 require 'conexion.php';

 $query=mysqli_query($connect, "SELECT * FROM cliente");
 $codigo="reporte.xls";

 header('content-type: aplication/vnd.ms-excel');
 header('content-Disposition: attachment; filename=' .$codigo);
 header('pragma: no-cache');
 header('expires: 0');

 echo '<table border=1>';
 echo '<tr>';
 echo '<th colspan=7>Reporte de Clientes</th>';
 echo '<tr>';
 echo '<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO</th><th>DIRECCION</th><th>TELEFONO</th><th>SALDO</th><th>CREDITO</th></tr>';

 while ($row=mysqli_fetch_array($query)){
 	echo '<tr>';
 	echo '<td>' .$row['id_cliente']. '</td>';
 	echo '<td>' .$row['nombre']. '</td>';
 	echo '<td>' .$row['apellido']. '</td>';
 	echo '<td>' .$row['direccion']. '</td>';
 	echo '<td>' .$row['telefono']. '</td>';
 	echo '<td>' .$row['saldo']. '</td>';
    echo '<td>' .$row['credito']. '</td>';
 	echo '</tr>';
 }
 echo '</table>';
 
 
?>