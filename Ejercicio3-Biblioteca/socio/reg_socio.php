<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
                    <li><a href="reg_socio.php">Registrar</a></li>
                    <li><a href="listado_socio.php">Listado</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Prestamos</a>
                <ul class="items">
                    <li><a href="../prestamo/reg_prestamo2.php">Registrar</a></li>
                    <li><a href="../prestamo/listado_prestamo.php">Listado</a></li>
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
    <form class="formulario" action="proc_socio.php" method="post">
      <table class="tabla">
        <tr>
          <td><label for="nombre">Nombre</label></td>
          <td><input type="text" name="nombre" id="nombre" /></td>
        </tr>
        <tr>
          <td><label for="fnac">fecha nacimiento</label></td>
          <td><input type="date" name="fnac" id="fnac" /></td>
        </tr>
        <tr>
          <td><label for="direccion">Direccion</label></td>
          <td><input type="text" name="direccion" id="direccion" /></td>
        </tr>
        <tr>
          <td><label for="telefono">telefono</label></td>
          <td><input type="text" name="telefono" id="telefono" /></td>
        </tr>
        <tr>
          <td><label for="email">email</label></td>
          <td><input type="text" name="email" id="email" /></td>
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