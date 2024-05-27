<?php

  include('conexion.php');
  include('validar_sesion.php');

  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $pass2 = $_POST['pass2'];
  $fecha_actual = date('Y-m-d');

  if ($pass != $pass2){
    echo"<script>
    alert('Las contrasenias no coincides, vuelva a interntarlo');
    window.location.href = 'registrar.html';
    </script>";
  }
  else{
    $ver_usuarios = "SELECT U.user from usuario U where U.user = '$user'";
    $ver = mysqli_query($con, $ver_usuarios);
    $valor = mysqli_fetch_array($ver);
    if ($valor){
      echo"<script>
      alert('Ese nombre de usuario ya está registrado en la BD. Intente nuevamente!');
      window.location.href = '../index.html';
      </script>";
    }
    else{
      $sql = "INSERT INTO `usuario`(`user`, `password`,`fnac`, `nomyape`) VALUES ('$user','$pass','$fecha_actual', 'Sin definir')";
      $res = mysqli_query($con, $sql);
      if ($res){
        echo"<script>
        alert('El registro ha sido exitoso!');
        window.location.href = '../index.html';
        </script>";
      }
    }

  }


  
?>