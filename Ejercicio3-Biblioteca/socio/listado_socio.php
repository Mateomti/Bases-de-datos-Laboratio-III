<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Document</title>
</head>
<body>
  <a href="../index.php">menu</a>
<?php
include("../conexion.php");

$sql = "SELECT T.* FROM socio T";
$res = mysqli_query($con, $sql);

if($res==false) {
  
}
else{
  ?>
  <h1><center>listado</center></h1>
  <br><br>
  <div class="formulario">
  <table class="tabla">
    <tr>
      <td>Nombre</td>
      <td>Fecha Nacimiento</td>
      <td>Direccion</td>
      <td>Telefono</td>
      <td>Mail</td>
    </tr>
    <?php
    while($vec = mysqli_fetch_array($res)){
      
      echo"<tr>";
      echo"<td>$vec[1]</td>";
      echo"<td>$vec[2]</td>";
      echo"<td>$vec[3]</td>";
      echo"<td>$vec[4]</td>";
      echo"<td>$vec[5]</td>";
      echo"</tr>";

    }echo"</table>";}
?>
 </div>





</body>
</html>
  