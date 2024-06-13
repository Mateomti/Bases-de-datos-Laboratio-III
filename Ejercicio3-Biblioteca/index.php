<?php
include('../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ejercicio 3 - Biblioteca</title>
</head>
<body>
    <div class="conteiner">
        <ul class="nav-bar">
            <a href="index.php">Inicio <br> <br> <br></a>
            <li>
                <a href="#">Libros</a>
                <ul class="items">
                    <li><a href="libros/reg_libro.php">Registrar</a></li>
                    <li><a href="libros/listado_libro.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Socios</a>
                <ul class="items">
                    <li><a href="socio/reg_socio.php">Registrar</a></li>
                    <li><a href="socio/listado_socio.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Prestamos</a>
                <ul class="items">
                    <li><a href="prestamo/reg_prestamo.php">Registrar</a></li>
                    <li><a href="prestamo/listado_prestamos.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Detalle Prestamos</a>
                <ul class="items">
                    <li><a href="detalle/reg_detalle.php">Registrar</a></li>
                    <li><a href="detalle/">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Reparacion</a>
                <ul class="items">
                    <li><a href="reparacion/reg_reparacion.php">Registrar</a></li>
                    <li><a href="reparacion/listado_reparacion.php">Listado</a></li>
                </ul>
            </li>
            <div class="footer">
                <a href="../menu.php">Menu Principal <br><br></a>
                <a href="../cerrar_sesion.php">Cerrar Sesion</a>
            </div>
        </ul>
    </div>
</body>
</html>