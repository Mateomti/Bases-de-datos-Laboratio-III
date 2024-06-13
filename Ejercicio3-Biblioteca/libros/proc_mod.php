<?php
include("../conexion.php");

$cod = $_POST["cod"];
$tit = $_POST["tit"];
$editorial = $_POST["editorial"];
$fecha = $_POST["fecha"];
$idioma = $_POST["idioma"];
$paginas = $_POST["paginas"];
$estado = $_POST["estado"];

$sql = "UPDATE `libro`
        SET `titulo`='$tit', `editorial`='$editorial', `fedicion`='$fecha', `idioma`='$idioma', `cantpaginas`='$paginas', `estado`='$estado'
        WHERE `cod_libro`= $cod";

$res = mysqli_query($con, $sql);
if($res) {
    echo "<script> alert ('Salio bien');
    window.location.href = 'listado_libro.php';
    </script>";
} else {
    echo "<script> alert ('Salio mal');
    window.location.href = 'listado_libro.php';
    </script>";
}
?>