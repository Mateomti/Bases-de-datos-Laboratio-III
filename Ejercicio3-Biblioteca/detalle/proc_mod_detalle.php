<?php
include("../conexion.php");

$codigo = $_POST["codigo"];
$socio = $_POST["socio"];
$libro = $_POST["libro"];
$observacion = $_POST["observacion"];

$sql = "UPDATE `detalleprestamo`
        SET `cod_prestamo`='$socio', `cod_libro`= '$libro', `observaciones`='$observacion'
        WHERE `cod_detalle`= $codigo";

$res = mysqli_query($con, $sql);
if($res) {
    echo "
    <script> alert ('Detalle Modificado con exito!');
    window.location.href = 'listado_detalle.php';
    </script>";
} else {
    echo "<script> alert ('Salio mal');
    window.location.href = 'listado_detalle.php';
    </script>";
}
?>