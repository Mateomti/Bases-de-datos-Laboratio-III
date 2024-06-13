<?php
include("../conexion.php");

$libro = $_POST["libro"];
$fecha = $_POST["fecha"];
$motivo = $_POST["motivo"];

$sql = "INSERT INTO reparacion (fingreso, motivo, cod_libro)
        VALUES ('$fecha', '$motivo', '$libro')";

$res = mysqli_query($con, $sql);

if($res == true) {
  echo "
  <script> 
    alert('Registro exitoso!');
    window.location.href = '../index.php';
  </script>";
} else {
  echo "
  <script> 
    alert('Ocurrio un error!');
    window.location.href = '';
  </script>";
}
?>