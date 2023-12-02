<?php session_start() ?>
<?php require("dir.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sakura Sushi & Grill</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css ">
</head>

<body>

  <?php require("header.php") ?>

  <div class="restaurant-page">
    <img src="<?php echo $STATIC ?>\sushi.jpg" alt="Restaurante 1">
    <div class="restaurant-info">
      <h3>Sakura Sushi & Grill</h3>
      <p>En "Sakura Sushi & Grill", te invitamos a explorar la riqueza de la cocina japonesa en un ambiente elegante y
        acogedor. Nuestra carta presenta una amplia gama de opciones, desde sushi y sashimi frescos hasta platos de
        teppanyaki preparados con destreza frente a tus ojos. Cada bocado es una obra de arte, preparada con los
        ingredientes más frescos y auténticos. Disfruta de la serenidad de nuestra decoración japonesa mientras
        saboreas sabores exquisitos que te transportarán a las calles de Tokio.</p>
      <p>Puntuación: ★★★★☆</p>
      <p>Precio: $$</p>
      <a href="<?php if(logged_in()) echo "/ing-web/book"; else echo "/ing-web/login"; ?>" class="reserva">Reservar</a> 
    </div>
  </div>

  <div class="menu">
    <div class="menu-item">
      <h4>Entradas</h4>
      <ul>
        <li>Sopa Miso</li>
        <li>Edamame al Vapor</li>
        <li>Gyoza (Dumplings)</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Sushi y Sashimi</h4>
      <ul>
        <li>Sashimi de Salmón</li>
        <li>Nigiri de Atún</li>
        <li>Sushi Tempura</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Platos Principales</h4>
      <ul>
        <li>Tempura Udon</li>
        <li>Yakitori (Brochetas de Pollo)</li>
        <li>Teriyaki de Salmón</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Postres</h4>
      <ul>
        <li>Mochi Helado</li>
        <li>Tarta de Té Verde</li>
        <li>Sopa de Frutas</li>
      </ul>
    </div>
  </div>

  <?php require("footer.php") ?>
</body>

</html>