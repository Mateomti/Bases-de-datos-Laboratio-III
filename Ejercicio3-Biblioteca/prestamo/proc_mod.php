<?php
include("../conexion.php");

$cod = $_POST["cod"];
$socio = $_POST["socio"];
$ingreso = $_POST["ingreso"];
$egreso = $_POST["devolucion"];
$estado = $_POST["estado"];


$sql = "UPDATE `prestamo`
        SET `cod_socio`='$socio', `fecha_prestamo`='$ingreso', `fecha_devolucion`='$egreso', `estado`='$estado' 
        WHERE `cod_prestamo`= $cod";

$res = mysqli_query($con, $sql);
if($res) {
    echo "<script> alert ('Salio bien');
    window.location.href = 'listado_prestamo.php';
    </script>";
} else {
    echo "<script> alert ('Salio mal');
    window.location.href = 'listado_prestamo.php';
    </script>";
}
?>