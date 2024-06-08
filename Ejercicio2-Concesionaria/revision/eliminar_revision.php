<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_GET['cod'];
$sql = "DELETE FROM `revision` WHERE cod_revision = '$cod'";
$res = mysqli_query($con, $sql);

if ($res==true){
  echo"
  <script>
    alert('La revisión ha sido eliminada correctamente! ');
    window.location.href = 'listado_revision.php';
  </script>
  ";
}
else{
  echo"
  <script>
    alert('Ha ocurrido un error inesperado.');
    window.location.href = 'listado_revision.php';
  </script>
  ";
  
}


?>