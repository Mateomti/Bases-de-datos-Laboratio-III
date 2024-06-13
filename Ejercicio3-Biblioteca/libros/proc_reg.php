<?php
include("../conexion.php");
include("../../validar_sesion.php");

$tit = $_POST['tit'];
$editorial = $_POST['editorial'];
$estado = $_POST['estado'];
$fecha = $_POST['fecha'];
$idioma = $_POST['idioma'];
$paginas = $_POST['paginas'];
$estado = $_POST['estado'];

$sql = "INSERT INTO libro (titulo, editorial,fedicion, idioma, cantpaginas, estado)
        VALUES ('$tit', '$editorial', '$fecha', '$idioma', $paginas, '$estado')";

$res = mysqli_query($con, $sql);

if($res === true) { 
  echo "
  <script> 
    alert('Registro exitoso!');
    window.location.href = 'listado_libro.php';
  </script>";
} else {
  echo "
  <script> 
    alert('Ocurrio un error!');
    window.location.href = '';
  </script>";
}
?>