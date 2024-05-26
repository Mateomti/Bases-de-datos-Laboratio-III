<?php
include('conexion.php');
  $user = $_GET['user'];
  $sql = "SELECT * from usuario where usuario.user = '$user'";
  $res = mysqli_query($con, $sql);
  $vector = mysqli_fetch_array($res);
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
          echo"<li><a class='navbar-items' href='menu.php?user=$user'>Menu Principal</a></li>"; 
          ?>
          <li>
            <a class="navbar-items-cerrar" href="../index.html">Cerrar sesion</a>
          </li>
        </ul>
      </nav>
    </header>
    <h1 class="titulo">Ver perfil del usuario</h1>

    <div class="mod">
      <form action="procesarMod.php" method="post">
        <h1>Modifique su perfil</h1>
        <label> ID Usuario</label>
        <?php echo"<input type='text' id='id' name='id' value='$vector[0]' readonly />";?>
        <label> Nuevo Usuario</label>
        <?php echo"<input type='text' id='user' name='user' value='$vector[1]' required />";?>
        <label> Ingrese su nombre y apellido</label>
        <?php echo"<input type='text' id='nom' name='nom' value='$vector[4]' required />";?>
        <label> Ingrese su fecha de nacimiento</label>
        <?php echo"<input type='text' id='fnac' name='fnac' value='$vector[3]' required />";?>
        <input class="submit" type="submit" value="Modificar" />
      </form>
    </div>

    </body>
</html>