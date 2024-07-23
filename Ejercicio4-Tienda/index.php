<?php
include('../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Tienda</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="conteiner">
      <ul class="nav-bar">
        <li><a class="titulo" href="index.php">Menu Principal</a>
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
            <li><a href="cliente/listado_cliente.php">Clientes</a></li>
            <li><a href="cliente/listado_compra.php">Compras</a></li>
            <li><a href="proveedores/listado_proveedores.php">Proveedores</a></li>
            <li><a href="detalle/listad_detalle.php">Detalle de Compras</a></li>
          </ul>
        </li>
        <li><a class="titulo" href="#">Registrar</a>
          <ul class="items">
            <li><a href="productos/reg_producto.php">Productos</a></li>
            <li><a href="cliente/reg_cliente.php">Clientes</a></li>
            <li><a href="cliente/reg_compra.php">Compras</a></li>
            <li><a href="proveedores/reg_proveedores.php">Proveedores</a></li>
            <li><a href="detalle/listado_detalle.php">Detalle de Compras</a></li>
          </ul>
        </li>
        <li><a class="cs" href="../menu.php">Inicio</a></li>
        <li><a class="cs" href="../cerrar_sesion.php">Cerrar Sesion</a></li>
      </ul>
  </div>
</body>
</html>