<?php
include('../../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/funciones.js"></script>

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
                    <li><a href="../socio/reg_socio.php">Registrar</a></li>
                    <li><a href="../socio/listado_socio.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Prestamos</a>
                <ul class="items">
                    <li><a href="../prestamo/reg_prestamo.php">Registrar</a></li>
                    <li><a href="../prestamo/listado_prestamo.php">Listado</a></li>
                </ul>
            </li>
            <li>
              <a href="#">Detalle Prestamos</a>
              <ul class="items">
                  <li><a href="../detalle/reg_detalle.php">Registrar</a></li>
                  <li><a href="../detalle/listado_detalle.php">Listado</a></li>
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
    <?php
        include("../conexion.php");

        $sql = "SELECT T.* FROM libro T";
        $res = mysqli_query($con, $sql);

        if($res == false) {
        
        }
        else{
            ?>
            <div class="formulario">
                <table class="tabla" >
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
                <?php
                while($vec = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>$vec[1]</td>";
                echo "<td>$vec[2]</td>";
                echo "<td>$vec[3]</td>";
                echo "<td>$vec[4]</td>";
                echo "<td>$vec[5]</td>";
                echo "<td>$vec[6]</td>";
                echo "<td><a href='mod.php?id=$vec[0]'>Modificar</a></td>";
                echo "<td><a href='eliminar.php?id=$vec[0]' onclick='return confirmar()'>Eliminar</a></td>";
                echo "</tr>";
            }echo "</table>";
        }
    ?>
    </div>
</body>
</html>


