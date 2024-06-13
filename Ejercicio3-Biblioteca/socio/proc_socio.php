<?php
include("../conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$fnac = $_POST["fnac"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];

$sql = "INSERT INTO socio (nomyape, fnacimiento, direccion,telefono,email)
        VALUES ('$nombre', '$fnac', '$direccion','$telefono','$email')";

$res = mysqli_query($con, $sql);

if($res == true) {
  echo "
  <script> 
    alert('Registro exitoso!');
    window.location.href = 'listado_socio.php';
  </script>";
} else {
  echo "
  <script> 
    alert('Ocurrio un error!');
    window.location.href = 'listado_socio.php';
  </script>";
}
?>