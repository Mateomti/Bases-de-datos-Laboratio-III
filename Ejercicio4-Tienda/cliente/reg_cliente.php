<?php
include('../../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Tienda</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="conteiner">
      <ul class="nav-bar">
        <li><a class="titulo" href="../index.php">Menu Principal</a>
        <li><a class="titulo" href="#">Categorias</a>
          <ul class="items">
            <li><a href="#">Computacion</a></li>
            <li><a href="#">Deporte</a></li>
            <li><a href="#">Librería</a></li>
            <li><a href="#">Mueblería</a></li>
          </ul>
        </li>
        <li><a class="titulo" href="#">Listado</a>
          <ul class="items">
            <li><a href="productos/listado_producto.php">Productos</a></li>
            <li><a href="listado_cliente.php">Clientes</a></li>
            <li><a href="proveedores/listado_proveedores.php">Proveedores</a></li>
            <li><a href="detalle/listad_detalle.php">Detalle de Compras</a></li>
          </ul>
        </li>
        <li><a class="titulo" href="#">Registrar</a>
          <ul class="items">
            <li><a href="productos/reg_producto.php">Productos</a></li>
            <li><a href="reg_cliente.php">Clientes</a></li>
            <li><a href="proveedores/reg_proveedores.php">Proveedores</a></li>
            <li><a href="detalle/listado_detalle.php">Detalle de Compras</a></li>
          </ul>
        </li>
        <li><a class="cs" href="../../menu.php">Inicio</a></li>
        <li><a class="cs" href="../../cerrar_sesion.php">Cerrar Sesion</a></li>
      </ul>
  </div>
  <form class="formulario" action="procesar_reg.php" method="POST" >
    <table class="tabla">
      <tr>
        <th colspan="2">Registrar Cliente</th>
      </tr>
      <tr>
        <td><label for="nombre">Nombre y apellido</label></td>
        <td><input class="input" type="text" name="nombre" id="nombre" required></td>
      </tr>
      <tr>
        <td><label for="dni">DNI</label></td>
        <td><input class="input" type="number" name="dni" id="dni" min="1" max="99999999" required></td>
      </tr>
      <tr>
        <td><label for="direccion">Direccion</label></td>
        <td><input class="input" type="text" name="direccion" id="direccion" required></td>
      </tr>
      <tr>
        <td><label for="ciudad">Ciudad</label></td>
        <td><input class="input" type="text" name="ciudad" id="ciudad" required></td>
      </tr>
      <tr>
        <td><button type="reset">Borrar</button></td>
        <td><button type="submit">Enviar</button></td>
      </tr>
    </table>
  </form>
</body>
</html>