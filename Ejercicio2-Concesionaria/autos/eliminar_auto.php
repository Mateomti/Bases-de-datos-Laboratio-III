<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_GET['cod'];

$sql = "DELETE FROM `auto` WHERE cod_auto = '$cod'";
$res = mysqli_query($con, $sql);

if ($res==true){
  echo"
  <script>
    alert('El auto ha eliminado correctamente! ');
    window.location.href = 'listado_auto.php';
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