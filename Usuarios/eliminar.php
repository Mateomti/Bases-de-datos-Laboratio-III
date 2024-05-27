<?php
include('conexion.php');
include('validar_sesion.php');

$id = $_GET['id'];

$ver = "DELETE from usuario where usuario.id_usuario = $id";
$res = mysqli_query($con, $ver);
if ($res){
  echo"<script>
  alert('El usuario ha sido eliminado correctamente!');
  window.location.href = '../index.html';
  </script>";
}


?>