<?php
include("conexion.php");

$cod = $_POST["cod"];

$sql = "DELETE FROM detalleprestamo WHERE cod_detalle = '$cod'";
$$res = mysqli_query($con, $sql);
if($res) {
    echo "<script> alert('Objeto eliminado con éxito!');
    window.location.href = '';
    </script>";
} else {
    echo "<script> alert('Ocurrió un error inesperado.');
    window.location.href = '';
    </script>";
}
?>