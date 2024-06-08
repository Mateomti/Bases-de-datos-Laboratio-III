<?php
include('../../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Ejercicio 3</title>
</head>
<body>
    <div class="conteiner">
        <ul class="nav-bar">
            <a href="../index.php">Inicio <br> <br> <br></a>
            <li>
                <a href="#">Libros</a>
                <ul class="items">
                    <li><a href="reg_libro.php">Registrar</a></li>
                    <li><a href="listado_libro.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Socios</a>
                <ul class="items">
                    <li><a href="">Registrar</a></li>
                    <li><a href="">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Prestamos</a>
                <ul class="items">
                    <li><a href="">Registrar</a></li>
                    <li><a href="">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Reparacion</a>
                <ul class="items">
                    <li><a href="">Registrar</a></li>
                    <li><a href="">Listado</a></li>
                </ul>
            </li>
            <div class="footer">
                <a href="../../menu.php">Menu Principal <br><br></a>
                <a href="../../cerrar_sesion.php">Cerrar Sesion</a>
            </div>
        </ul>
    </div>
    <form class="formulario" action="" method="">
        <table class="tabla">
            <tr>
                <th>Titulo</th>
                <th>Editorial</th>
                <th>Edicion</th>
                <th>Idioma</th>
                <th>Paginas</th>
                <th>Estado</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
            <tr>
                <td>Diccionario</td>
                <td>Vicente</td>
                <td>2002</td>
                <td>Español</td>
                <td>240</td>
                <td>Nuevo</td>
                <td>Modificar</td>
                <td>Eliminar</td>
            </tr>
        </table>
    </form>
</body>
</html>