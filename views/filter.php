<?php session_start() ?>
<?php

require_once("dir.php");
require_once("connection.php");
require_once("models/restaurants.php");

$rest = new Restaurant(connect());

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BucaZona</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css">
</head>

<body>

  <?php require("header.php") ?>

  <section class="restaurant-list">

    <h2>Resultados del filtro</h2>

    <?php

    $rest_list = $rest->filter_restaurants($_POST["cuisine"], $_POST["price"]);

    foreach ($rest_list as $restaurant) {
      echo "<div class=\"rest-bloque\">\n
            \t<img src=\"$restaurant[image_url]\" alt=\"restaurante $restaurant[id]\">\n
            \t<div class=\"restaurant-info\">\n
            \t\t<h3>$restaurant[nombre]</h3>\n
            \t\t<p>$restaurant[descripcion]</p>\n
            \t\t<p>Puntuación: " . num_to_star($restaurant["punt"]) . "</p>\n
            \t\t<p>Precio: " . num_to_price($restaurant["precio"]) . " </p>\n
            \t\t<a href=\"$ROOT\\restaurants\\$restaurant[id]\">Ver Restaurante</a>\n
            \t</div>\n
      </div>\n";
    }

    ?>

  </section>

  <?php require("footer.php") ?>

</body>

</html>