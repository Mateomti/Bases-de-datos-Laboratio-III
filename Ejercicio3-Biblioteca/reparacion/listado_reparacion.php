<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Document</title>
</head>
<body>
  <a href="../index.php">Menu</a>
<?php
include("../conexion.php");

$sql = "SELECT T.*, L.titulo, L.cod_libro FROM reparacion T, Libro L
        WHERE L.cod_libro = T.cod_libro";
$res = mysqli_query($con, $sql);

if($res == false){
  echo"error.";
}
else{
  ?>
  <div class="formulario">
    <table class="tabla">
      <tr>
        <td>Ingreso</td>
        <td>Motivo</td>
        <td>Egreso</td>
        <td>Libro</td>
        <td>Finalizar</td>
        <td>Eliminar</td>
      </tr>
  <?php
  while($vec = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>$vec[1]</td>";
    echo "<td>$vec[2]</td>";
    if($vec[3] == "0000-00-00"){
      echo "<td>Sin definir</td>";
    }else{
      echo "<td>$vec[3]</td>";
    }
    echo "<td>$vec[5]</td>";

    
    echo "<td><a href='mod_reparacion.php?id=$vec[0]'>Finalizar</a></td>";
    echo "<td><a href='elim.php?id=$vec[0]'>Eliminar</a></td>";
    echo "</tr>";
  }
}
?>
</div>
</body>
</html>