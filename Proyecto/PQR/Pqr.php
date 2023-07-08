<?php
echo "Digite el nombre del servidor";
fscanf(STDIN, "%s", $servername);

echo "Digite en nombre del usuario";
fscanf(STDIN, "%s", $username);

echo "Digite la contraseña";
fscanf(STDIN, "%s", $password);

echo "Digite la base de datos";
fscanf(STDIN, "%s", $bd);


 //create conection

 $conexion = mysqli_connect($servername, $username, $password, $bd);

 //check conection

 if(!$conexion){
 	die("conexion fallida " . mysqli_connect_error());
 }
   //script sql

 $sql = "CREATE TABLE pqr (
  documento int (6) PRIMARY KEY AUTOINCREMENT,
  nombre varchar (20),
  apellido varchar (20),
  direccion varchar (30),
  telefono int (11) 
)";

 if ($conexion->query($sql) == TRUE)  {
 	echo "TABLA CREADA CON EXITO";
 }else{
 	echo "ERROR AL CREAR TABLA: " .$conexion->error;
 }

?>