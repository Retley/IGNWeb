<?php session_start() ?>
<?php require("dir.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Casa del Sabor Mexicano</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css">
</head>

<body>
  <?php require("header.php") ?>

  <div class="restaurant-info">
    <img src="<?php echo $STATIC ?>\burritos.jpg" alt="Restaurante 1">
    <h3>La Casa del Sabor Mexicano</h3>
    <p>"La Casa del Sabor Mexicano" es un rincón de México en el corazón de la ciudad. Aquí, celebramos la rica
      tradición de la comida mexicana con una explosión de sabores y colores. Nuestra carta es un viaje culinario
      que incluye platos icónicos como tacos al pastor, enchiladas suizas, guacamole fresco y margaritas
      artesanales. Cada plato es una representación auténtica de la diversidad y la pasión de la cocina mexicana. En
      "La Casa del Sabor Mexicano", la comida es una fiesta y nuestros comensales son nuestros invitados de honor.
    </p>
    <p>Puntuación: ★★★★★</p>
    <p>Precio: $</p>
    <a href="<?php if(logged_in()) echo "/ing-web/book"; else echo "/ing-web/login"; ?>" class="reserva">Reservar</a> 
  </div>

  <div class="menu">
    <div class="menu-item">
      <h4>Entradas</h4>
      <ul>
        <li>Guacamole Fresco</li>
        <li>Tacos al Pastor</li>
        <li>Tamales de Elote</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Platos Principales</h4>
      <ul>
        <li>Enchiladas Suizas</li>
        <li>Mole Poblano</li>
        <li>Tostadas de Ceviche</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Postres</h4>
      <ul>
        <li>Churros con Chocolate Caliente</li>
        <li>Flan de Caramelo</li>
        <li>Pastel de Tres Leches</li>
      </ul>
    </div>
  </div>

  <?php require("footer.php") ?>

</body>

</html>