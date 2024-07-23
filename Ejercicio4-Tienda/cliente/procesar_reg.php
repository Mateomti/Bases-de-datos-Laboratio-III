<?php
include("../conexion.php");
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];

$sql = "INSERT INTO `cliente`(`nomyape`, `dni`, `direccion`, `ciudad`) VALUES ('$nombre','$dni','$direccion','$ciudad')";
$res = mysqli_query($con, $sql);
if ($res){
  echo "
  <script> 
  alert ('Registro de cliente exitoso!');
  window.location.href = '../index.php';
  </script>";
}
else{
  echo "
  <script> 
  alert ('Ha ocurrido un error!');
  window.location.href = '../index.php';
  </script>";
}
?>