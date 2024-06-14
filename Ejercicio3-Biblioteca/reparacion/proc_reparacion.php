<?php
include("../conexion.php");

$cod = $_POST['libro'];
$libro = $_POST["libro"];
$fecha = $_POST["fecha"];
$motivo = $_POST["motivo"];

$sql = "INSERT INTO reparacion (fingreso, motivo, cod_libro)
        VALUES ('$fecha', '$motivo', '$libro')";
$res = mysqli_query($con, $sql);

$libro = "UPDATE libro
          SET estado = 'En reparacion'
          where cod_libro = '$cod'";
$otr = mysqli_query($con, $libro);

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