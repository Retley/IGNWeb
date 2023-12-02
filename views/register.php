<?php session_start() ?>
<?php require("dir.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BucaZona - Registro</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css">
</head>

<body>

  <?php require("header.php") ?>

  <div class="registration">
    <div class="registration-box">
      <h2>Registro</h2>
      <form action="/ing-web/signup" method="post">
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" class="user-control" id="name" name="name" placeholder="Tu nombre completo" required>
        </div>
        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" class="user-control" id="email" name="email" placeholder="Tu correo electrónico" required>
        </div>
        <div class="form-group">
          <label for="phone">Teléfono:</label>
          <input type="tel" class="user-control" id="phone" name="phone" placeholder="Tu número de teléfono" required>
        </div>
        <div class="form-group">
          <label for="username">Nombre de Usuario:</label>
          <input type="text" class="user-control" id="username" name="username" placeholder="Elige un nombre de usuario" required>
        </div>
        <div class="form-group">
          <label for="password">Contraseña:</label>
          <input type="password" class="user-control" id="password" name="password" placeholder="Elige una contraseña segura" required>
        </div>
        <input class="submit" type="submit" name="signup" value="Sign Up" style="margin: 0;">
      </form>
    </div>
  </div>


  <?php require("footer.php") ?>

</body>

</html>