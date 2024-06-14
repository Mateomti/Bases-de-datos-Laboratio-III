<?php
include('../conexion.php');

$cod = $_GET['cod'];

$sql = "SELECT * FROM `socio` WHERE socio.cod_socio = $cod";

$res = mysqli_query($con, $sql);
$vec = mysqli_fetch_array($res);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modificar socio</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="conteiner">
        <ul class="nav-bar">
            <a href="../index.php">Inicio <br> <br> <br></a>
            <li>
                <a href="#">Libros</a>
                <ul class="items">
                    <li><a href="../libros/reg_libro.php">Registrar</a></li>
                    <li><a href="../libros/listado_libro.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Socios</a>
                <ul class="items">
                    <li><a href="reg_socio.php">Registrar</a></li>
                    <li><a href="listado_socio.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Prestamos</a>
                <ul class="items">
                    <li><a href="../prestamo/reg_prestamo2.php">Registrar</a></li>
                    <li><a href="../prestamo/listado_prestamo.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Reparacion</a>
                <ul class="items">
                    <li><a href="../reparacion/reg_reparacion.php">Registrar</a></li>
                    <li><a href="../reparacion/listado_reparacion.php">Listado</a></li>
                </ul>
            </li>
            <div class="footer">
                <a href="../../menu.php">Menu Principal <br><br></a>
                <a href="../../cerrar_sesion.php">Cerrar Sesion</a>
            </div>
        </ul>
    </div>
    <form action="proc_mod.php" method="POST" class="formulario">
        <table class="tabla">
            <tr>
                <td><label for="cod">Codigo</label></td>
                <td><input type="number" name="cod" id="cod" readonly value="<?php echo$vec[0]?>" /></td>
            </tr>
            <tr>
                <td><label for="nombre">Nombre</label></td>
                <td><input type="text" name="nombre" id="nombre"  value="<?php echo$vec[1]?>" /></td>
            </tr>
            <tr>
                <td><label for="fnac">fecha nacimiento</label></td>
                <td><input type="date" name="fnac" id="fnac" value="<?php echo$vec[2]?>"/></td>
            </tr>
            <tr>
                <td><label for="direccion">Direccion</label></td>
                <td><input type="text" name="direccion" id="direccion" value="<?php echo$vec[3]?>"/></td>
            </tr>
            <tr>
                <td><label for="telefono">telefono</label></td>
                <td><input type="text" name="telefono" id="telefono" value="<?php echo$vec[4]?>"/></td>
            </tr>
            <tr>
                <td><label for="email">email</label></td>
                <td><input type="text" name="email" id="email" value="<?php echo$vec[5]?>"/></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                    <button type="submit">enviar</button>
                    <button type="reset">reset</button>
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>