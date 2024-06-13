<?php
include("../conexion.php");
$id = $_GET["id"];
$sql = "SELECT R.*, L.cod_libro, L.titulo FROM reparacion R, libro L WHERE R.cod_reparacion = $id AND R.cod_libro = L.cod_libro";
$res = mysqli_query($con, $sql);
$vec = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1><center>Finalizar Reparacion</center></h1>
    <center><a href="../index.php">Menu</a></center>
    <br /><br />
    <form action="proc_mod_reparacion.php" method="post">
      <table
        align="center"
        border="1"
        bgcolor="grey"
        cellpadding="20"
        cellspacing="2"
      >
        <tr>
          <td><label for="id">Codigo</label></td>
          <td><input type="text" name="id" id="id" value="<?php echo$vec[0]; ?>" readonly /></td>
        </tr>
        <tr>
          <td><label for="ingreso">Ingreso</label></td>
          <td><input type="date" name="ingreso" id="ingreso" value="<?php echo$vec[1]; ?>" readonly/></td>
        </tr>
        <tr>
          <td><label for="motivo">Motivo</label></td>
          <td><input type="text" name="motivo" id="motivo" value="<?php echo $vec[2]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="egreso">Egreso</label></td>
          <td><input type="date" name="egreso" id="egreso"/></td>
        </tr>
        <tr>
          <td><label for="libro">Libro</label></td>
          <td><input type="text" name="libro" id="libro" value="<?php echo$vec[5]; ?>"  /><?php echo$vec[6]; ?></td>
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