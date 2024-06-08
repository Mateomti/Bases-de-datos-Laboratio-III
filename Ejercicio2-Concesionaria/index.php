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
        <li><a href="clientes/reg_cliente.php">Registrar</a></li>
        <li><a href="clientes/listado_cliente.php">Listado</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Revision</a>
      <ul class="navbar-vertical">
        <li><a href="revision/reg_revision.php">Registrar</a></li>
        <li><a href="revision/listado_revision.php">Listado</a></li>
      </ul>
    </li>
    <li>
      <a href="#">Actividades</a>
      <ul class="navbar-vertical-act">
        <li><a href="actividades/punto1.php">Búsqueda y listado de revisiones </a></li>
        <li><a href="actividades/punto2.php">Revisiones por cliente </a></li>
        <li><a href="actividades/punto3.php">Revisiones por auto </a></li>
        <li><a href="actividades/punto4.php">Revisiones no finalizadas </a></li>
      </ul>
    </li>
    <li><a href="../menu.php">Menu Principal</a></li>
    <li><a href="../cerrar_sesion.php">Cerrar sesion</a></li>
  </ul>
</nav>

  
</body>
</html>