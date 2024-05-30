<?php
include('../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <ul class="navbar-horizontal">
      <li>
        <a href="index.php">Inicio</a>
      </li>
      <li>
        <a href="#">Autos</a>
          <ul class="navbar-vertical">
            <li><a href="autos/reg_auto.php">Registrar</a></li>
            <li><a href="autos/listado_auto.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Cliente</a>
          <ul class="navbar-vertical">
            <li><a href="#">Registrar</a></li>
            <li><a href="listado_cliente.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Revision</a>
        <ul class="navbar-vertical">
          <li><a href="#">Registrar</a></li>
          <li><a href="listado_revision.php">Listado</a></li>
        </ul>
      </li>
      <li><a href="../menu.php">Menu Principal</a></li>
      <li><a href="../cerrar_sesion.php">Cerrar sesion</a></li>
    </ul>
  </nav>
  <table class="tabla-auto">
    <tr >
      <td class="titulo">Nombre y Apellido</td>
      <td class="titulo">Direccion</td>
      <td class="titulo">Ciudad</td>
      <td class="titulo">Telefono</td>
      <td class="titulo">Fecha de Alta</td>
      <td class="otros">Modificar</td>
      <td class="otros">Eliminar</td>
    </tr>
    <tr>
      <td>Mateo Insaurralde</td>
      <td>J. C. Mora</td>
      <td>Rio Grande</td>
      <td>2964-577654</td>
      <td>2002-04-28 </td>
      <td>Modificar</td>
      <td>Eliminar</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  
</body>
</html>