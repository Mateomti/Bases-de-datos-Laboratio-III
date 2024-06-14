<?php
include("../conexion.php");

$id = $_GET["id"];
$prueba = "SELECT D.cod_libro, R.cod_libro
            FROM detalleprestamo D, reparacion R
            WHERE $id = D.cod_libro
            AND $id = R.cod_libro";
$ress = mysqli_query($con, $prueba);
$vec = mysqli_fetch_array($ress);

if ($id == $vec[1] or $id == $vec[2]){
    echo "
    <script> alert ('El libro no puede ser eliminado ya que pertene a un prestamo/reparacion!');
    window.location.href = 'listado_libro.php';
    </script>";
}
else{
    $sql = "DELETE FROM libro 
    WHERE `cod_libro`= $id";

    $res = mysqli_query($con, $sql);
    if($res) {
        echo "<script> alert ('Eliminado con exito!');
        window.location.href = 'listado_libro.php';
        </script>";
    } else {
        echo "<script> alert ('Ocurrió un error al actualizar los datos.');
        window.location.href = 'listado_libro.php';
        </script>";
}
}


?>
