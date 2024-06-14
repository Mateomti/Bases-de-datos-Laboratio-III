<?php
include("../conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM prestamo WHERE cod_prestamo = $id";
$res = mysqli_query($con, $sql);
$vec = mysqli_fetch_array($res);
if ($vec[4] === 'En prestamo'){
  echo "
  <script> alert ('El prestamo no se puede eliminar ya que sigue vigente!');
  window.location.href = 'listado_prestamo.php';
  </script>";
}
else{
  $sql = "DELETE FROM prestamo WHERE cod_prestamo = $id";
  $res=mysqli_query($con, $sql);
  if($res) {
    echo "
    <script> alert ('Eliminacion exitosa!');
    window.location.href = 'listado_prestamo.php';
    </script>";
  } else {
    echo "
    <script> alert ('El prestamo sigue en vigencia');
    window.location.href = 'listado_prestamo.php';
    </script>";
  }
}


?>