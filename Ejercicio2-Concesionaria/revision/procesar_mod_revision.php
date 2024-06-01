<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_POST['cod'];
$ingreso = $_POST['ingreso'];
$egreso = $_POST['egreso'];
$auto = $_POST['auto'];
$estado = $_POST['estado'];
$filtro = $_POST['filtro'];
$freno = $_POST['freno'];
$aceite = $_POST['aceite'];
$descripcion = $_POST['descripcion'];


$sql = "UPDATE revision SET  fingreso='$ingreso',fegreso='$egreso', estado='$estado', cambio_filtro='$filtro', cambio_aceite='$aceite', cambio_freno='$freno', descripcion='$descripcion', cod_auto='$auto' where cod_revision = $cod";
$res = mysqli_query($con, $sql);
if ($res = true){
  echo"
  <script>
  alert('La modificacion ha sido exitosa!');
  window.location.href = 'listado_revision.php';
  </script>";
}
else{
  echo"
  <script>
  alert('Ha ocurrido un error!');
  window.location.href = 'reg_revision.php';
  </script>";
}


?>