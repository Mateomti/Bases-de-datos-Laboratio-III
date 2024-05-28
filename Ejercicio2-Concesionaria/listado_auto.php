<?php
include('../Usuarios/validar_sesion.php');
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
            <li><a href="#">Registrar</a></li>
            <li><a href="listado_auto.php">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Cliente</a>
          <ul class="navbar-vertical">
            <li><a href="#">Registrar</a></li>
            <li><a href="#">Listado</a></li>
          </ul>
      </li>
      <li>
        <a href="#">Revision</a>
        <ul class="navbar-vertical">
          <li><a href="#">Registrar</a></li>
          <li><a href="#">Listado</a></li>
        </ul>
      </li>
      <li><a href="../Usuarios/menu.php">Menu Principal</a></li>
      <li><a href="../Usuarios/cerrar_sesion.php">Cerrar sesion</a></li>
    </ul>
  </nav>
  <table class="tabla-auto">
    <tr >
      <td class="titulo">Modelo</td>
      <td class="titulo">Marca</td>
      <td class="titulo">Color</td>
      <td class="titulo">Precio Venta</td>
      <td class="titulo">Cliente</td>
    </tr>
    <tr>
      <td>Renault</td>
      <td>Sandero</td>
      <td>Negro</td>
      <td>1200000</td>
      <td>Mateo Insaurralde</td>
    </tr>
    <tr>
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
    </tr>
  </table>
  
</body>
</html>