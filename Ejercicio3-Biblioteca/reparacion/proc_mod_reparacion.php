<?php
include("../conexion.php");

$id = $_POST["id"];
$motivo = $_POST["motivo"];
$ingreso = $_POST["ingreso"];
$egreso = $_POST["egreso"];
$libro = $_POST["libro"];

// Convertir las fechas a formato de DateTime para PHP
$dateEgreso = new DateTime($egreso);
$dateActual = new DateTime();

// Comparar las fechas y establecer el estado del libro
if ($dateEgreso > $dateActual) {
    $estadoLibro = 'En reparacion';
} else {
    $estadoLibro = 'En Biblioteca';
}

$sql = "UPDATE reparacion
        INNER JOIN libro
        ON libro.cod_libro = reparacion.cod_libro
        SET libro.estado = '$estadoLibro', reparacion.fingreso='$ingreso', 
        reparacion.motivo='$motivo', reparacion.fegreso='$egreso', 
        reparacion.cod_libro= '$libro'
        WHERE reparacion.cod_reparacion = $id";

$res = mysqli_query($con, $sql);

if($res) {
    echo "<script> alert('Modificacion exitosa');
    window.location.href = 'listado_reparacion.php';
    </script>";
} else {
    echo "<script> alert('Ha ocurrido un error!');
    window.location.href = 'listado_reparacion.php';
    </script>";
}
?>
