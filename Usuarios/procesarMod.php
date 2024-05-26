<?php
include('conexion.php');

$id = $_POST['id'];
$user = $_POST['user'];
$nom = $_POST['nom'];
$fnac = $_POST['fnac'];

$original = "SELECT U.user from usuario U where U.id_usuario = $id";
$resa = mysqli_query($con, $original);
$userr = mysqli_fetch_array($resa);

$ver_usuarios = "SELECT U.user from usuario U where U.user = '$user'";
$ver = mysqli_query($con, $ver_usuarios);
$valor = mysqli_fetch_array($ver);
if ($valor[0] != $userr[0]){
  echo"<script>
  alert('Ese nombre de usuario ya está registrado en la BD. Intente nuevamente!');
  window.location.href = 'modificar.php?user=$userr[0]';
  </script>";
}
else{
  $modificar = "UPDATE usuario set user='$user', nomyape='$nom', fnac='$fnac' where usuario.id_usuario = $id";
  if (mysqli_query($con, $modificar)){
    echo"<script>
    alert('Modificacion exitosa!');
    window.location.href = 'perfil.php?user=$user';
    </script>";
  }else{
    echo"<script>
    alert('Ha ocurrido un error, intentelo nuevamente.');
    window.location.href = 'modificar.php?user=$userr[0]';
    </script>";
  }
}
?>