
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Female Store formulario</title>
</head>
<body>
    <img src="Img/logo.jpg" style="border-radius: 8px;" width="120" class="logo">
    <center><img src="Img/Moda.jpg" width="55%" alt="pqr"></center>
    <br>
    <center><legend>SUGERENCIAS Y RECLAMOS</legend></center>
     

    <br>
    <form action="insert.php" method="GET">
        <br>
        <table>
            <td>
                <tr>
                    <center><legend>Formulario de contacto</legend></center>
                </tr>
            </td>
            <br>
            <label for="Documento">
                <input type="text" name="documento" placeholder="documento">
            </label>
            <br>
            <br>
            <label for="Nombre">
                <input type="text" name="nombre" placeholder=" Nombre">
            </label>
            <br>
            <br>
            <label for="Apellido">
                <input type="text" name="apellido" placeholder=" apellido">
            </label>
            <br>
            <br>
            <label for="Direccion">
                <input type="text" name="direccion" placeholder="dirección">
            </label>
            <br>
            <br>
            <label for="Telefono">
                <input type="text" name="telefono" placeholder="telefono">
            </label>
            <br>
            <br>
            <label for="Mensaje">
                <textarea name="mensaje"></textarea>
            </label>
            <br>
            <br>
            <input type="submit" class="boton" value="Enviar Mensaje">
            

        </table>
    </form>

     
    
    <style>
        body {
            background-color: pink;
        }
        form {
            background-color: white;
            border: 2px solid;
            color: red;
            font-size: 20px;
            width: 1000px;
            top: 50%;
            left: 12%;
            text-align: center;
            position: relative;
            width: 75%;
        }
        input {
            height: 30px;
            width: 280px;
        }
        .boton {
            background-color: blue;
            height: 25px;
            width: 150px;
            color: white;
            font-size: 18px;
            border-radius: 7px;
        }
        textarea {
            width: 350px;
            height: 150px;
            border: 2px solid;
            color: black;
            text-align: justify;
 
        }
        legend {
            color: red;
            font-size: 25px;
        }
    </style>
</body>


</html>