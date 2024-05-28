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
    <li><a href="../menu.php">Menu Principal</a></li>
    <li><a href="../cerrar_sesion.php">Cerrar sesion</a></li>
  </ul>
</nav>

  
</body>
</html>