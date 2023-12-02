<?php session_start() ?>
<?php require("dir.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BucaZona</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css ">
</head>

<body>

  <?php require("header.php") ?>

  <div class="restaurant-page">
    <img src="<?php echo $STATIC ?>\lasagna.jpg" alt="Restaurante 1">
    <div class="restaurant-info">
      <h3>Ristorante Buona Tavola</h3>
      <p>"Ristorante Buona Tavola" es una joya culinaria que rinde homenaje a la tradición gastronómica italiana. Con
        raíces en la región de la Toscana, nuestro restaurante combina la pasión por la cocina auténtica con
        ingredientes frescos y locales. Nuestra carta presenta una amplia variedad de pastas frescas hechas a mano,
        desde ravioles rellenos de ricotta y espinacas hasta tagliatelle con salsa de trufa. Nuestro horno de leña
        produce las pizzas más deliciosas, con una base fina y crujiente y una selección de ingredientes de alta
        calidad. El "Ristorante Buona Tavola" es un lugar donde la comida, el vino y la hospitalidad italiana se
        fusionan para crear una experiencia verdaderamente inolvidable.</p>
      <p>Puntuación: ★★★★★</p>
      <p>Precio: $$$</p>
      <a href="<?php if(logged_in()) echo "/ing-web/book"; else echo "/ing-web/login"; ?>" class="reserva">Reservar</a> 
    </div>
  </div>

  <div class="menu">
    <div class="menu-item">
      <h4>Entradas</h4>
      <ul>
        <li>Bruschetta con tomate fresco y albahaca</li>
        <li>Prosciutto y melón</li>
        <li>Calamares a la romana</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Platos Principales</h4>
      <ul>
        <li>Lasaña de carne</li>
        <li>Pizza Margherita</li>
        <li>Ossobuco con risotto a la milanesa</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Postres</h4>
      <ul>
        <li>Tiramisú</li>
        <li>Panna cotta con frutos rojos</li>
        <li>Gelato italiano</li>
      </ul>
    </div>
  </div>

  <?php require("footer.php") ?>

</body>

</html>