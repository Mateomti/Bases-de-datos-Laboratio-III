<?php
include('../conexion.php');
include('../../validar_sesion.php');

$ingreso = $_POST['ingreso'];
$egreso = $_POST['egreso'];
$auto = $_POST['auto'];
$estado = $_POST['estado'];
$filtro = $_POST['filtro'];
$freno = $_POST['freno'];
$aceite = $_POST['aceite'];
$descripcion = $_POST['descripcion'];


$sql = "INSERT INTO revision (fingreso, fegreso, estado, cambio_filtro, cambio_aceite, cambio_freno, descripcion, cod_auto)
        values ('$ingreso','$egreso', '$estado', '$filtro', '$aceite', '$freno', '$descripcion', '$auto')";
$res = mysqli_query($con, $sql);
if ($res = true){
  echo"
  <script>
  alert('El registro ha sido exitoso!');
  window.location.href = 'listado_revision.php';
  </script>";
}
else{
  echo"
  <script>
  alert('Ha ocurrido un error!');
  window.location.href = 'reg_revision.php';
  </script>";
}


?>