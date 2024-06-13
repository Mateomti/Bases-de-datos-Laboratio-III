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

      $sql="SELECT L.cod_libro, L.titulo FROM libro L";
      $res=mysqli_query($con,$sql);
      
    ?>
    <h1><center>Titulo</center></h1>
    <center><a href="../index.php">Menu</a></center>
    <br /><br />
    <form action="proc_reparacion.php" method="post">
      <table
        align="center"
        border="1"
        bgcolor="grey"
        cellpadding="40"
        cellspacing="2"
      >
        <tr>
          <td><label for="libro">Libro</label></td>
          <td><select name="libro" id="libro"> 
            <?php while($vec = mysqli_fetch_array($res)){
                echo " <option value='$vec[0]'>$vec[1]</option>";
            }
            ?>
          </select></td>
        </tr>
        <tr>
          <td><label for="fecha">fecha de ingreso</label></td>
          <td><input type="date" name="fecha" id="fecha" /></td>
        </tr>
        <tr>
          <td><label for="motivo">Motivo</label></td>
          <td><input type="text" name="motivo" id="motivo" /></td>
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