<?php
include('../conexion.php');

$sql = "SELECT socio.nomyape, socio.cod_socio from socio";

$res = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/funciones.js"></script>
    
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
    <form class="formulario" action="proc_reg.php" method="post" onsubmit="return validarFechas(event);">
      <table class="tabla">
        <tr>
          <td><label for='socio'>Socio</label></td>
          <td>
            <select name='socio' id="socio">
              <?php
                while($vec = mysqli_fetch_array($res)){
                  echo"<option value='$vec[1]'>$vec[0]</option>";
                }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <td><label for="prestamo">fecha de prestamo</label></td>
          <td><input type="date" name="prestamo" id="prestamo" /></td>
        </tr>
        <tr>
          <td><label for="devolucion">fecha de devolucion</label></td>
          <td><input type="date" name="devolucion" id="devolucion" /></td>
        </tr>
        <tr>
          <td><label for="estado">estado</label></td>
          <td>
            <input type="text" name="estado" id="estado" readonly/>
            <button type="button" name ="ver " id="ver" onclick="Estado();">Ver</button>
          </td>
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
    <br /><br /><br /><br />
  </body>
</html>