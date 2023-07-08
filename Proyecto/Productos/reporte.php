<?php
 require 'conexion.php';

 $query=mysqli_query($connect, "SELECT * FROM producto");
 $codigo="reporte.xls";

 header('content-type: aplication/vnd.ms-excel');
 header('content-Disposition: attachment; filename=' .$codigo);
 header('pragma: no-cache');
 header('expires: 0');

 echo '<table border=1>';
 echo '<tr>';
 echo '<th colspan=7>Reporte de Productos</th>';
 echo '<tr>';
 echo '<tr><th>ID</th><th>PRODUCTO</th><th>COLOR</th><th>MARCA</th><th>MODELO</th><th>PRECIO</th><th>UNIDADES</th></tr>';

 while ($row=mysqli_fetch_array($query)){
 	echo '<tr>';
 	echo '<td>' .$row['id_producto']. '</td>';
 	echo '<td>' .$row['nombre_producto']. '</td>';
 	echo '<td>' .$row['color']. '</td>';
 	echo '<td>' .$row['Marca']. '</td>';
 	echo '<td>' .$row['modelo']. '</td>';
 	echo '<td>' .$row['precio']. '</td>';
    echo '<td>' .$row['unidades']. '</td>';
 	echo '</tr>';
 }
 echo '</table>';
 
 
?>