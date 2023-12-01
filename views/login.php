<!DOCTYPE html>
<html lang="es">
<?php

require_once("dir.php");

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BucaZona - Inicio de Sesión</title>
  <link rel="icon" href="<?php echo $STATIC?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC?>\style.css">
</head>

<body>

    <header><?php require("header.html"); ?></header>

  <div class="login-register">
    <div class="login-register-box">
      <h2>Iniciar Sesión</h2>
      <form action="/ing-web/login" method="post">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username" placeholder="Tu nombre de usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" placeholder="Tu contraseña" required>

        <button type="submit">Login</button>
        <a href="register.html">Register</a>
      </form>
    </div>
  </div>

  <footer><?php require("footer.html"); ?></footer>

</body>

</html>