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
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/funciones.js"></script>
    
    <title>Document</title>
  </head>
  <body>
    <h1><center>Titulo</center></h1>
    <center><a href="#">Menu</a></center>
    <br /><br />
    <form action="proc_reg.php" method="post" onsubmit="return validarFechas(event);">
      <table
        align="center"
        border="1"
        bgcolor="grey"
        cellpadding="40"
        cellspacing="2"
      >
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