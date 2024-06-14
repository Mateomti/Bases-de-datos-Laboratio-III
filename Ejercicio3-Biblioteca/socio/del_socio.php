<?php
include('../conexion.php');

$cod = $_GET['cod'];

$prueba = "SELECT P.cod_socio, P.cod_prestamo 
          FROM prestamo P, socio S 
          WHERE P.cod_socio = S.cod_socio";
$resp = mysqli_query($con, $prueba);
$vec = mysqli_fetch_array($resp);
if ($vec[0] == $cod){
  echo "
  <script> alert ('El socio no puede ser modificado ya que pertenece a un prestamo!');
  window.location.href = 'listado_socio.php';
  </script>";
}
else{
  $sql = "DELETE FROM socio where cod_socio = $cod";

  $res = mysqli_query($con, $sql);
  if ($res == true){
    echo"
    <script>
      alert('El socio ha sido eliminado exitosamente!');
      window.location.href = 'listado_socio.php';
    </script>";
  }else{
    echo"
    <script>
      alert('Ha ocurrido un error');
      window.location.href = 'listado_socio.php';
    </script>";
  }
}

?>