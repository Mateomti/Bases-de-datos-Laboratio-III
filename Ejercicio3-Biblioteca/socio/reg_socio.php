<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1><center>Titulo</center></h1>
    <a href="../index.php"><center>Menu</center></a>
    <br /><br />
    <form action="proc_socio.php" method="post">
      <table
        align="center"
        border="1"
        bgcolor="grey"
        cellpadding="40"
        cellspacing="2"
      >
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