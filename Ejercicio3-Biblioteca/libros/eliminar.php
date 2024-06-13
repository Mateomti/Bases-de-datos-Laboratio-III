<?php
include("../conexion.php");

$id = $_GET["id"];

$sql = "DELETE FROM libro 
        WHERE `cod_libro`= $id";

$res = mysqli_query($con, $sql);
if($res) {
    echo "<script> alert ('¡Actualización exitosa!');
    window.location.href = 'listado_libro.php';
    </script>";
} else {
    echo "<script> alert ('Ocurrió un error al actualizar los datos.');
    window.location.href = 'listado_libro.php';
    </script>";
}
?>
