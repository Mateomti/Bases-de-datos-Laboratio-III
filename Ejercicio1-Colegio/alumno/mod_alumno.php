<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body class="bg-secondary">
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Ejercicio 1</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Listado
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="ListadoAlumno.php">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/ListadoMateria.php">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../cursada/ListadoCursada.php">Cursada</a></li>
              </ul>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Registrar
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="reg_alumno.html">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/reg_materia.html">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../cursada/reg_cursada.php">Cursada</a></li>
              </ul>
            </li>
            
        </div>
      </div>
    </nav>
    <?php
    include("../conexion.php");

    $ida = $_GET["id_a"];

    $sql = "SELECT * FROM Alumno WHERE id_alumno =".$ida;
    $res = mysqli_query($con,$sql);
    $vec = mysqli_fetch_array($res);
    ?>
    <form  method="post" action="Procesarmod_alumno.php">
    <h1 class="titulo"><center>Modificar Alumno</center></h1>
      <table
      align="center"
      class="table table-bordered w-50">
      <tr>
        <td  height="40px">
            <label for="ida">ID</label>
        </td>
        <td  height="40px">
            <input  type="number" name="ida" id="ida" value="<?php echo$vec[0]?>" readonly>
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="dni">D.N.I.</label>
        </td>
        <td  height="40px">
            <input  type="number" name="dni" id="dni" min="5000000" max="1000000000" placeholder="Ingrese el DNI" value="<?php echo$vec[1]?>">
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="fnac">Fecha de nacimiento</label>
        </td>
        <td  height="40px">
            <input type="date" name="fnac" id="fnac" value="<?php echo$vec[2]?>">
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="nomyape" ">Nombre y Apellido </label>
        </td>
        <td bgcolor="#D7D2F7" height="40px">
            <input  type="text" id="nomyape" name="nomyape" placeholder="Ingrese nombre y apellido." value="<?php echo$vec[3]?>">

        </td>
    </tr>
    
    <tr>
        <td bgcolor
            <label for="ciudad">Ciudad</label>
        </td>
        <td  height="40px">
            <input  type="text" name="ciudad" id="ciudad" placeholder="Ingrese la ciudad" value="<?php echo$vec[4]?>">

        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="domicilio">Domicilio</label>
        </td>
        <td  height="40px">
            <input  type="text" name="domicilio" id="domicilio" placeholder="Ingrese el domicilio" value="<?php echo$vec[5]?>">
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="genero">Genero</label>
        </td>
        <td  height="40px">
            <input  type="text" name="genero" id="genero" placeholder="Ingrese el genero" value="<?php echo$vec[6]?>">
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="mail">Mail</label>
        </td>
        <td  height="40px">
            <input  type="mail" name="mail" id="mail" placeholder="Ingrese el mail" value="<?php echo$vec[7]?>">
        </td>
    </tr>
    <tr>
        <td  height="40px">
            <label for="telefono">Telefono</label>
        </td>
        <td  height="40px" >
            <input  type="text" id="telefono" name="telefono" placeholder="2964-12334567" value="<?php echo$vec[8]?>">
        </td>
    </tr>
    <tr>
        <td colspan="2" 
        
        align="center">
        <center><input  type="submit"class="btn btn-outline-success"  value="Enviar">
            <input  type="reset" class="btn btn-outline-danger" value="Borrar"></center>
        </td>
    </tr>
    </table>
    </form>

    
</body>
    

</html>