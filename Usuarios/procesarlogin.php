<?php
include('conexion.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$ver_login = "SELECT U.* from usuario U where U.user = '$user' and U.password = '$pass'";
$ver = mysqli_query($con, $ver_login);
$valor = mysqli_fetch_array($ver);
if ($valor){
  echo"<script>
  alert('Inicio de sesion exitoso!');
  window.location.href = 'menu.php?user=$user';
  </script>";
}
else{
  echo"<script>
  alert('El usuario o la contraseña son incorrectos, Reintente nuevamente');
  window.location.href = 'index.html';
  </script>";
}

?>