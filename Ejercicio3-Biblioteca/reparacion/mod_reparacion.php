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
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
  </head>
  <body><div class="conteiner">
      <ul class="nav-bar">
          <a href="../index.php">Inicio <br> <br> <br></a>
          <li>
              <a href="#">Libros</a>
              <ul class="items">
                  <li><a href="libros/reg_libro.php">Registrar</a></li>
                  <li><a href="libros/listado_libro.php">Listado</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Socios</a>
              <ul class="items">
                  <li><a href="socio/reg_socio.php">Registrar</a></li>
                  <li><a href="socio/listado_socio.php">Listado</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Prestamos</a>
              <ul class="items">
                  <li><a href="prestamo/reg_prestamo.php">Registrar</a></li>
                  <li><a href="prestamo/listado_prestamo.php">Listado</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Detalle Prestamos</a>
              <ul class="items">
                  <li><a href="detalle/reg_detalle.php">Registrar</a></li>
                  <li><a href="detalle/listado_detalle.php">Listado</a></li>
              </ul>
          </li>
          <li>
              <a href="#">Reparacion</a>
              <ul class="items">
                  <li><a href="reg_reparacion.php">Registrar</a></li>
                  <li><a href="listado_reparacion.php">Listado</a></li>
              </ul>
          </li>
          <div class="footer">
              <a href="../menu.php">Menu Principal <br><br></a>
              <a href="../cerrar_sesion.php">Cerrar Sesion</a>
          </div>
      </ul> 
    </div>
    <form class="formulario" action="proc_mod_reparacion.php" method="post">
      <table class="tabla">
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