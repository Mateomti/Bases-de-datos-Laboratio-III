<?php
include("../conexion.php");

$id = $_POST["id"];
$motivo = $_POST["motivo"];
$ingreso = $_POST["ingreso"];
$egreso = $_POST["egreso"];
$libro = $_POST["libro"];

$sql = "UPDATE `reparacion`
        SET `fingreso`='$ingreso', `motivo`='$motivo', `fegreso`='$egreso', `cod_libro`= '$libro'
        WHERE `cod_reparacion`= $id";

$res = mysqli_query($con, $sql);
if($res) {
    echo "<script> alert ('Salio bien');
    window.location.href = 'listado_reparacion.php';
    </script>";
} else {
    echo "<script> alert ('Salio mal');
    window.location.href = '';
    </script>";
}
?>