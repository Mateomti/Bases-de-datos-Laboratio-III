<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_POST['cod'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];

$sql = "UPDATE cliente set nomyape='$nombre', direccion='$direccion',ciudad='$ciudad',telefono=$telefono, dalta ='$fecha' where cod_cliente = '$cod'";
$res = mysqli_query($con, $sql);

if ($res==true){
  echo"
  <script>
    alert('El cliente ha sido modificado correctamente! ');
    window.location.href = 'listado_cliente.php';
  </script>
  ";
}
else{
  echo"
  <script>
    alert('Ha ocurrido un error inesperado.');
    window.location.href = 'listado_auto.php';
  </script>
  ";
}
?>