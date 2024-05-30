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
        <a href="../index.php">Inicio</a>
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
      <td class="titulo">Ingreso</td>
      <td class="titulo">Egreso</td>
      <td class="titulo">Estado</td>
      <td class="otros">Cambio Filtro</td>
      <td class="otros">Cambio Aceite</td>
      <td class="otros">Cambio Freno</td>
      <td class="otros">Descripcion</td>
      <td class="titulo">Cliente</td>
      <td class="otros">Modificar</td>
      <td class="otros">Eliminar</td>

    </tr>
    <tr>
      <td>2002-04-28</td>
      <td>2002-04-31</td>
      <td>Finalizado</td>
      <td>Ok</td>
      <td>Ok</td>
      <td>Ok</td>
      <td>Terminado</td>
      <td>Mateo Insaurralde</td>
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
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  
</body>
</html>