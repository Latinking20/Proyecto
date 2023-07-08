<?php
 require 'conexion.php';

 $query=mysqli_query($connect, "SELECT * FROM pqr");
 $docu="pqr.xls";

 header('content-type: aplication/vnd.ms-excel');
 header('content-Disposition: attachment; filename=' .$docu);
 header('pragma: no-cache');
 header('expires: 0');

 echo '<table border=1>';
 echo '<tr>';
 echo '<th colspan=6>Reporte de ingreso Pqr</th>';
 echo '<tr>';
 echo '<tr><th>DOCUMENTO</th><th>NOMBRE</th><th>APELLIDO</th><th>DIRECCION</th><th>TELEFONO</th><th>MENSAJE</th></tr>';

 while ($row=mysqli_fetch_array($query)){
 	echo '<tr>';
 	echo '<td>' .$row['documento']. '</td>';
 	echo '<td>' .$row['nombre']. '</td>';
 	echo '<td>' .$row['apellido']. '</td>';
 	echo '<td>' .$row['direccion']. '</td>';
 	echo '<td>' .$row['telefono']. '</td>';
 	echo '<td>' .$row['mensaje']. '</td>';
 	echo '</tr>';
 }
 echo '</table>';
 
 
?>