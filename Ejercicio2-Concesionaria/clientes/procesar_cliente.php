<?php
include('../conexion.php');
include('../../validar_sesion.php');

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];

$sql = "INSERT into `cliente` (nomyape, direccion, ciudad, telefono, dalta) values ('$nombre','$direccion','$ciudad','$telefono', '$fecha')";
$res = mysqli_query($con, $sql);

if ($res==true){
  echo"
  <script>
    alert('El cliente ha sido registrado correctamente! ');
    window.location.href = 'listado_cliente.php';
  </script>
  ";
}
else{
  echo"
  <script>
    alert('Ha ocurrido un error inesperado.');
    window.location.href = 'listado_cliente.php';
  </script>
  ";
}
?>