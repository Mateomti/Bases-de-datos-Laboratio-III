<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
  <script type="text/javascript" src="../js/funciones.js"></script>
  <link rel="stylesheet" href="../style.css">
  <title>Document</title>
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
                    <li><a href="../socio/reg_socio.php">Registrar</a></li>
                    <li><a href="../socio/listado_socio.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Prestamos</a>
                <ul class="items">
                    <li><a href="reg_prestamo.php">Registrar</a></li>
                    <li><a href="listado_prestamo.php">Listado</a></li>
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

$sql = "SELECT T.*,  S.nomyape, S.cod_socio FROM prestamo T, socio S WHERE T.cod_socio = S.cod_socio";
$res = mysqli_query($con, $sql);

if($res == false){
  echo"error";

}
else{
  ?>
  <div class="formulario">
  <table class="tabla">
    <tr>
      <td>Socio</td>
      <td>F. Prestamo</td>
      <td>F. Devolucion</td>
      <td>Estado</td>
      <td>Modificar</td>
      <td>Eliminar</td>
    </tr>
    <?php
    while($vec = mysqli_fetch_array($res)) {
      echo "<tr>";
      echo "<td>$vec[5]</td>";
      echo "<td>$vec[2]</td>";
      echo "<td>$vec[3]</td>";
      echo "<td>$vec[4]</td>";
      echo "<td><a href='mod_prestamo.php?id=$vec[0]'>Modificar</a></td>";
      echo "<td><a href='eliminar.php?id=$vec[0]' onclick='return confirmar();'>Eliminar</a></td>";
      echo "</tr>";
    }echo"</table>";
}
?>
</div>
</body>
</html>