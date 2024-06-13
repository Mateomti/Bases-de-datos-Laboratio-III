<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php
      include("../conexion.php");

    $sql1="SELECT P.cod_prestamo, S.nomyape, S.cod_socio FROM prestamo P, socio S WHERE P.cod_socio = S.cod_socio";
    $sql2= "SELECT L.cod_libro, L.titulo, L.estado
            FROM libro L
            WHERE L.estado = 'biblioteca'";

    $res1= mysqli_query($con,$sql1);
    $res2= mysqli_query($con,$sql2);
  

    ?>
    <h1><center>Titulo</center></h1>
    <center><a href="../index.php">Menu</a></center>

    <br /><br />
    <form action="proc_reg_detalle.php" method="post">
      <table
        align="center"
        border="1"
        bgcolor="grey"
        cellpadding="40"
        cellspacing="2"
      >
        <tr>
          <td><label for="sos">SOCIO</label></td>
          <td><select name="sos" id="sos">
            <?php
              while($vec1 = mysqli_fetch_array($res1)){
                  echo" <option value='$vec1[0]'> $vec1[1] </option>";
              }
            ?>
          </select></td>
        </tr>
        <tr>
          <td><label for="libro">LIBRO</label></td>
          <td><select name="libro" id="libro">
            <?php
              while($vec2 = mysqli_fetch_array($res2)){
                  echo" <option value='$vec2[0]'> $vec2[1] </option>";
              }
            ?>
          </select></td>
        </tr>
        <tr>
          <td><label for="observacion">observaciones</label></td>
          <td><input type="text" name="observacion" id="observacion" /></td>
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