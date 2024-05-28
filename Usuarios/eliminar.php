<?php
include('conexion.php');
include('validar_sesion.php');


$ver = "DELETE from usuario where usuario.user = '$user'";
$res = mysqli_query($con, $ver);
if ($res){
  echo"<script>
  alert('El usuario ha sido eliminado correctamente!');
  window.location.href = '../index.html';
  </script>";
}


?>