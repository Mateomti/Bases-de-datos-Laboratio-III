<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Document</title>
</head>
<body>
  <a href="../index.php"><center>menu</center></a>
<?php
include("../conexion.php");

$sql = "SELECT T.*,  S.nomyape, S.cod_socio FROM prestamo T, socio S WHERE T.cod_socio = S.cod_socio";
$res = mysqli_query($con, $sql);

if($res == false){
  echo"error";

}
else{
  ?>
  <div class="formulario">
  <table class="tabla">
    <tr>
      <td>Socio</td>
      <td>F. Prestamo</td>
      <td>F. Devolucion</td>
      <td>Estado</td>
      <td>Modificar</td>
      <td>Eliminar</td>
    </tr>
    <?php
    while($vec = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>$vec[5]</td>";
      echo "<td>$vec[2]</td>";
      echo "<td>$vec[3]</td>";
      echo "<td>$vec[4]</td>";
      echo "<td><a href='mod.php?id=$vec[0]'>Modificar</a></td>";
      echo "<td><a href='elim.php?id=$vec[0]'>Eliminar</a></td>";
      echo "</tr>";
    }echo"</table>";
}
?>
</div>
</body>
</html>