<?php
include('../conexion.php');

$cod = $_POST['cod'];
$nomyape = $_POST['nombre'];
$fnacimiento = $_POST['fnac'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$sql = "UPDATE socio 
        SET `nomyape`='$nomyape',
        `fnacimiento`='$fnacimiento',
        `direccion`='$direccion',
        `telefono`='$telefono',
        `email`='$email'
         WHERE cod_socio = $cod";
$res = mysqli_query($con, $sql);

if ($res = true){
    echo"
    <script>
        alert('Modificacion exitosa');
        window.location.href = '../index.php';
    </script>";
}

?>