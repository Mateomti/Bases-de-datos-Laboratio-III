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
            if ($vec[6] == 'En Biblioteca'){
              echo"<option selected value='En Biblioteca'>En Biblioteca</option>
              <option value='Prestado'>Prestado</option>
              <option value='En Reparacion'>En Reparacion</option>";
            }
            if ($vec[6] == 'Prestado'){
              echo"<option  value='En Biblioteca'>En Biblioteca</option>
              <option selected value='Prestado'>Prestado</option>
              <option value='En Reparacion'>En Reparacion</option>";
            }
            if ($vec[6] == 'En Reparacion'){
              echo"<option  value='En Biblioteca'>En Biblioteca</option>
              <option value='Prestado'>Prestado</option>
              <option selected ='En Reparacion'>En Reparacion</option>";
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