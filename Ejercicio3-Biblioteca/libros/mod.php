<?php
include("../conexion.php");
$id = $_GET["id"];
$sql = "SELECT * FROM libro WHERE libro.cod_libro = $id";
$res = mysqli_query($con, $sql);
$vec = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>modificar libro</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <h1><center>modificar libro</center></h1>
    <center><a href="listado_libro.php">Menu</a></center>
    <br /><br />
    <form class="formulario" action="proc_mod.php" method="post">
    <table class="tabla" >
      <tr>
          <td><label for="cod">Codigo</label></td>
          <td><input type="number" name="cod" id="cod" value="<?php echo $vec[0]; ?>" readonly/></td>
        </tr>
        <tr>
          <td><label for="tit">Titulo</label></td>
          <td><input type="text" name="tit" id="tit" value="<?php echo $vec[1]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="editorial">editorial</label></td>
          <td><input type="text" name="editorial" id="editorial" value="<?php echo $vec[2]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="fecha">fecha</label></td>
          <td><input type="date" name="fecha" id="fecha" value="<?php echo $vec[3]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="idioma">idioma</label></td>
          <td><input type="text" name="idioma" id="idioma" value="<?php echo $vec[4]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="paginas">paginas</label></td>
          <td><input type="number" name="paginas" id="paginas" value="<?php echo $vec[5]; ?>"/></td>
        </tr>
        <tr>
          <td><label for="estado">estado</label></td>
          <td><select name="estado" id="estado">
            <?php
            if ($vec[6] == 'biblioteca'){
              echo"<option selected value='biblioteca'>biblioteca</option>
              <option value='prestado'>prestado</option>
              <option value='reparacion'>reparacion</option>";
            }
            if ($vec[6] == 'prestado'){
              echo"<option  value='biblioteca'>biblioteca</option>
              <option selected value='prestado'>prestado</option>
              <option value='reparacion'>reparacion</option>";
            }
            if ($vec[6] == 'reparacion'){
              echo"<option  value='biblioteca'>biblioteca</option>
              <option value='prestado'>prestado</option>
              <option selected ='reparacion'>reparacion</option>";
            }
            ?>
          </select></td>
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