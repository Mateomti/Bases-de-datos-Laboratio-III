<?php
$user = $_GET['user'];
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
          echo"<li><a class='navbar-items' href='perfil.php?user=$user'>Perfil</a></li>"; 
          ?>
          <li>
            <a class='navbar-items' href="index.html">Cerrar sesion</a>
          </li>
        </ul>
      </nav>
    </header>
    <h1 class="titulo">Menu principal</h1>
    <table class="tabla">
      <tr>
        <td class="ltd">
          <a href="../Ejercicio1-Colegio/index.html"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Ejercicio 1 | Colegio</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
      </tr>
      <tr>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/logo_utn.png" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
      </tr>
    </table>
  </body>
</html>
