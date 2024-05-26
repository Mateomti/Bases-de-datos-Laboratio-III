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
        
        $ida = $_POST["ida"];
        $dni = $_POST["dni"];
        $fnac = $_POST["fnac"];
        $nomyape = $_POST["nomyape"];
        $ciudad = $_POST["ciudad"];
        $domicilio = $_POST["domicilio"];
        $mail = $_POST["mail"];
        $genero = $_POST["genero"];
        $telefono = $_POST["telefono"];

        // Comprobar DNI 
        $cdni = "SELECT dni FROM `alumno` WHERE dni=$dni and id_alumno != '$ida'";
        $comprobar_dni = mysqli_query($con, $cdni);
        $vcdni = mysqli_fetch_array($comprobar_dni);

        // Comprobar mail
        $cmail = "SELECT mail FROM `alumno` WHERE mail='$mail' ";
        $comprobar_mail = mysqli_query($con, $cmail);
        $vcmail = mysqli_fetch_array($comprobar_mail);
        if ($vcmail){
          echo "<script>
                  alert('El email ingresado ya está registrado. Reingrese un email valido.');
                  window.location.href = 'ListadoAlumno.html';
                </script>";
        }
        else{

          if ($vcdni){
            echo "<script>
                    alert('El DNI ingresado ya está registrado. Reingrese un DNI valido.');
                    window.location.href = 'ListadoAlumno.php';
                  </script>";
          }
          else{
            $sql = "UPDATE alumno SET dni=$dni, fnacimiento='$fnac', apeynom='$nomyape', ciudad='$ciudad', domicilio='$domicilio', mail='$mail',genero='$genero',telefono='$telefono' 
                    WHERE id_alumno = $ida";
            $res = mysqli_query($con, $sql);
            if ($res == TRUE){
              echo "<h1 class='titulo'><center>Se ha modificado correctamente!</center></h1>";                  
            }
            else{
              echo "Ha ocurrido un error.";
            }
          }
        }
    ?>

</body>


</html>


