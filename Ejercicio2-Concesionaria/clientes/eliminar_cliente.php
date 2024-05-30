<?php
include('../conexion.php');
include('../../validar_sesion.php');

$cod = $_GET['cod'];

$ver = "SELECT A.cod_cliente FROM auto A WHERE cod_cliente = '$cod'";
$verificar = mysqli_query($con, $ver);
$valor = mysqli_fetch_array($verificar);

if ($valor[0] == $cod){
  echo"
  <script>
    alert('El cliente tiene un auto registrado, no se puede eliminar.');
    window.location.href = 'listado_cliente.php';
  </script>
  ";
}
else{
  $sql = "DELETE FROM `cliente` WHERE cod_cliente = '$cod'";
  $res = mysqli_query($con, $sql);
  
  if ($res==true){
    echo"
    <script>
      alert('El cliente ha eliminado correctamente! ');
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
}


?>