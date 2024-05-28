<?php
include('conexion.php');
include('validar_sesion.php');



  ?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
      <nav class="navbar">
        <h1><img src="img/logo_utn.png" /></h1>
        <ul>
          <?php
          echo"<li><a class='navbar-items' href='../menu.php'>Menu Principal</a></li>"; 
          ?>
          <li>
            <a class="navbar-items-cerrar" href="../cerrar_sesion.php">Cerrar sesion</a>
          </li>
        </ul>
      </nav>
    </header>
    <h1 class="titulo">Ver perfil del usuario</h1>
  <?php
  $verperfil = "SELECT * from usuario where usuario.user = '$user'";
  $res = mysqli_query($con,$verperfil);
  $vector = mysqli_fetch_array($res);
  ?>
  <table class="tabla-perfil" border="1" >
    <tr>
      <td class="ltd-perfil">
        <h3>Nombre del perfil:</h3>
      </td>
      <td class="ltd-perfil">
        <h4><?php echo$user?></h4>
      </td>
    </tr>
    <tr class="ltd-perfil">
      <td class="ltd-perfil">
        <h3>Nombre y apellido</h3>
      </td>
      <td class="ltd-perfil">
      <h4><?php echo$vector[4]?></h4>
      </td>
    </tr>
    <tr class="ltd-perfil">
      <td class="ltd-perfil">
        <h3>Fecha de nacimiento</h3>
      </td>
      <td class="ltd-perfil">
      <h4><?php echo$vector[3]?></h4>
      </td>
    </tr>
    <tr class="ltd-perfil">
      <td class="ltd-perfil">
        <h4><a class="modificar" href='modificar.php'>Modificar</a></h4>
      </td>
      <td class="ltd-perfil">
      <h4><a class="eliminar" href='eliminar.php' onclick='return confirmar()'>Eliminar</a></h4>

      </td>
    </tr>
  </table>
    </body>
    <script>
          function confirmar(){
            return confirm('¿Esta seguro que desea eliminar a este Usuario?\nSe borraran todo sus datos y sera redirigido al Log In.');
          }
        </script>
</html>
