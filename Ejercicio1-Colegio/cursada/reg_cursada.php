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
    <script type="text/javascript" src="../js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/mod.js"></script>
</head>
<body class="bg-secondary">
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html">Ejercicio 1</a>
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
                <li><a class="dropdown-item" href="../alumno/ListadoAlumno.php">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/ListadoMateria.php">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="ListadoCursada.php">Cursada</a></li>
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
                <li><a class="dropdown-item" href="../alumno/reg_alumno.html">Alumnos</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="../materia/reg_materia.html">Materias</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="reg_cursada.php">Cursada</a></li>
              </ul>
            </li>
            
        </div>
      </div>
    </nav>


    
    <?php
    include("../conexion.php");

    $sql1 = "SELECT A.id_alumno, A.apeynom, A.dni FROM alumno A";
    $res1 = mysqli_query($con, $sql1);
    // $matriz1 = [];
    // if ($res1) {
    //     while ($row = mysqli_fetch_array($res1, MYSQLI_ASSOC)) {
    //         $matriz1[] = $row['apeynom'];
    //     }
    // }
    $sql2 = "SELECT * FROM materia";
    $res2 = mysqli_query($con, $sql2);
    // $matriz2 = [];
    // if ($res2) {
    //     while ($row = mysqli_fetch_array($res2, MYSQLI_ASSOC)) {
    //         $matriz2[] = $row['nombre'];
    //     }
    // }

    ?>

<h1 class="titulo"><center>Registrar Cursada</center></h1>

    <form  method="post" action="Procesarreg_cursada.php">
      <table align="center" class="table w-50">
        <td>
          <div class="mb-3">
            <label for="nombre" class="form-label">Alumno</label>
            <select class="form-select" id="nombre" name="nombre">
              <?php while ($vec1 = mysqli_fetch_array($res1)) {
                  echo "<option value='$vec1[0]'> $vec1[1] </option>";
                }?>
            </select>
          </div>
          <div class="mb-3">
            <label for="materia" class="form-label">Materias</label>
            <select class="form-select" id="materia" name="materia">
              <?php while ($vec2 = mysqli_fetch_array($res2)) {
                    echo "<option value='$vec2[0]'> $vec2[1] </option>";
                }?>
            </select>
            <div class="mb-3">
            <label for="n1" class="form-label">Ingrese la primer nota</label>
            <input  type="number" name="n1" id="n1" min="1" max="10" class="form-control">
          </div>
          <div class="mb-3">
            <label for="n2" class="form-label">Ingrese la segunda nota</label>
            <input  type="number" name="n2" id="n2" min="1" max="10" class="form-control">
          </div>
          <div class="mb-3">
            <label for="asis" class="form-label">Ingrese el % de asistencia</label>
            <input  type="number" name="asis" id="asis" min="1" max="100"class="form-control">
          </div>
          <div class="mb-3">
            <label for="estado" class="form-label">Estado del alumno</label>
            <input  type="text" name="estado" id="estado" class="form-control" readonly>
          </div>
          <button type="button" class="btn btn-info" id="ver" name="ver">Ver estado</button>
          <div class="mb-3">
            <center>
            <input  type="submit"class="btn btn-outline-success"  value="Enviar">
            <input  type="reset" class="btn btn-outline-danger" value="Borrar">
            </center>
          </div>
        </td>
      </table>
    </form>
    
</body>


</html>

