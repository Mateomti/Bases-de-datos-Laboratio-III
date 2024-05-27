<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start(); // Inicia la sesión solo si no está ya iniciada
}

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
    // Si no está verificado, redirige al inicio de sesión
    echo"
    <script>
      alert('Debe iniciar sesion primero.');
      window.location.href = '../index.html';
    </script>";
    exit();
}
else{
    $user = $_SESSION['user'];
}

?>