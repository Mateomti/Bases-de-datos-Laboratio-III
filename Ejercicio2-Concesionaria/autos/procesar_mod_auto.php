<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_POST['cod'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$color = $_POST['color'];
$precio = $_POST['precio'];

$sql = "UPDATE auto set marca='$marca', modelo='$modelo',color='$color',pventa=$precio where cod_auto = '$cod'";
$res = mysqli_query($con, $sql);

if ($res==true){
  echo"
  <script>
    alert('El auto ha sido modificado correctamente! ');
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