<?php
include('../../validar_sesion.php');
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
    <form class="formulario" action="proc_reg.php" method="post">
      <table class="tabla" >
        <tr>
          <td><label for="tit">Titulo</label></td>
          <td><input type="text" name="tit" id="tit" /></td>
        </tr>
        <tr>
          <td><label for="editorial">editorial</label></td>
          <td><input type="text" name="editorial" id="editorial" /></td>
        </tr>
        <tr>
          <td><label for="fecha">fecha</label></td>
          <td><input type="date" name="fecha" id="fecha" /></td>
        </tr>
        <tr>
          <td><label for="idioma">idioma</label></td>
          <td><input type="text" name="idioma" id="idioma" /></td>
        </tr>
        <tr>
          <td><label for="paginas">paginas</label></td>
          <td><input type="number" name="paginas" id="paginas" /></td>
        </tr>
        <tr>
          <td><label for="estado">estado</label></td>
            <td>
            <select name="estado" id="estado">
              <option value="En Biblioteca">En Biblioteca</option>
              <option value="Prestado">Prestado</option>
              <option value="En Reparacion">En Reparacion</option>
            </select>
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