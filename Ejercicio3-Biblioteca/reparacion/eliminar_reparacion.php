<?php
include("../conexion.php");

$id = $_GET["id"]; // Este es el id de la reparación que se recibe por GET

// Primero, obtener el código del libro asociado a la reparación
$sql_get_cod_libro = "SELECT cod_libro FROM reparacion WHERE cod_reparacion = $id";
$res_get_cod_libro = mysqli_query($con, $sql_get_cod_libro);

if($res_get_cod_libro) {
    $row = mysqli_fetch_assoc($res_get_cod_libro);
    $cod_libro = $row['cod_libro'];

    if ($cod_libro) {
        // Luego, actualizar el estado del libro a 'En biblioteca'
        $sql_update_libro = "UPDATE libro SET estado = 'En biblioteca' WHERE cod_libro = $cod_libro";
        $res_update_libro = mysqli_query($con, $sql_update_libro);

        if ($res_update_libro) {
            // Finalmente, eliminar la reparación
            $sql_delete_reparacion = "DELETE FROM reparacion WHERE cod_reparacion = $id";
            $res_delete_reparacion = mysqli_query($con, $sql_delete_reparacion);

            if ($res_delete_reparacion) {
                echo "<script> alert('Reparacion eliminada con exito!');
                window.location.href = 'listado_reparacion.php';
                </script>";
            } else {
                echo "<script> alert('Ocurrió un error al eliminar la reparación.');
                window.location.href = 'listado_reparacion.php';
                </script>";
            }
        } else {
            echo "<script> alert('Ocurrió un error al actualizar el estado del libro.');
            window.location.href = 'listado_reparacion.php';
            </script>";
        }
    } else {
        echo "<script> alert('No se encontró el libro asociado a la reparación.');
        window.location.href = 'listado_reparacion.php';
        </script>";
    }
} else {
    echo "<script> alert('Ocurrió un error al obtener el código del libro.');
    window.location.href = 'listado_reparacion.php';
    </script>";
}
?>
