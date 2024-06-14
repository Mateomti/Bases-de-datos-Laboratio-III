<?php
    include("../conexion.php");

      $sos = $_POST["sos"];
      $libro = $_POST["libro"];
      $observacion = $_POST["observacion"];

      $sql = "INSERT INTO detalleprestamo (cod_prestamo, cod_libro, observaciones)
              VALUES ('$sos','$libro','$observacion')";

      $res = mysqli_query($con, $sql);

      if($res == true) {
        echo "
        <script> 
          alert('Registro exitoso!');
          window.location.href = '';
        </script>";
      } else {
        echo "
        <script> 
          alert('Ocurrio un error!');
          window.location.href = '';
        </script>";
      }
?>