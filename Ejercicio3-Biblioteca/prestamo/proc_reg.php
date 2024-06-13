<?php
include("../conexion.php");

$id_socio = $_POST["socio"];
$prestamo = $_POST["prestamo"];
$devolucion = $_POST["devolucion"];
$estado = $_POST["estado"];

$sql = "INSERT INTO prestamo (cod_socio, fecha_prestamo	, fecha_devolucion, estado)
        VALUES ('$id_socio', '$prestamo', '$devolucion', '$estado')";

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