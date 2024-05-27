<?php
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
          echo"<li><a class='navbar-items' href='perfil.php'>Perfil</a></li>"; 
          ?>
          <li>
            <a class='navbar-items' href="cerrar_sesion.php">Cerrar sesion</a>
          </li>
        </ul>
      </nav>
    </header>
    <h1 class="titulo">Menu principal</h1>
    <table class="tabla">
      <tr>
        <td class="ltd">
          <a href="../Ejercicio1-Colegio/index.php">
            <center><img src="img/logo_utn.png" /></center>
          </a>
          <p><center>Ejercicio 1 | Colegio</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
      </tr>
      <tr>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
        <td class="ltd">
          <a href="#"
            ><center><img src="img/coming_soon.jpg" /></center
          ></a>
          <p><center>Proximamente...</center></p>
        </td>
      </tr>
    </table>
  </body>
</html>
