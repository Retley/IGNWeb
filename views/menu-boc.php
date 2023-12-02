<?php session_start() ?>
<?php require("dir.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bocado Express</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css">
</head>

<body>
  <?php require("header.php") ?>

  <div class="restaurant-info">
    <img src="<?php echo $STATIC ?>\hotdog.jpg" alt="Restaurante 1">
    <h3>Bocado Express</h3>
    <p>"Bocado Express" es tu destino para satisfacer tus antojos con comidas rápidas y deliciosas. Nuestro menú
      ofrece una amplia variedad de opciones tentadoras, desde nuestras hamburguesas jugosas y papas fritas
      crujientes hasta nuestros famosos aros de cebolla y pollo frito irresistible. Utilizamos ingredientes frescos
      y de alta calidad para garantizar que cada bocado sea una experiencia deliciosa. Ya sea para llevar o para
      disfrutar en nuestro acogedor comedor, "Bocado Express" te ofrece la comodidad y el sabor que anhelas.</p>
    <p>Puntuación: ★★★★☆</p>
    <p>Precio: $</p>
    <a href="<?php if(logged_in()) echo "/ing-web/book"; else echo "/ing-web/login"; ?>" class="reserva">Reservar</a> 
  </div>

  <div class="menu">
    <div class="menu-item">
      <h4>Hamburguesas</h4>
      <ul>
        <li>Hamburguesa Clásica</li>
        <li>Hamburguesa con Queso</li>
        <li>Hamburguesa de Pollo</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Acompañamientos</h4>
      <ul>
        <li>Papas Fritas</li>
        <li>Aros de Cebolla</li>
        <li>Nuggets de Pollo</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Postres</h4>
      <ul>
        <li>Helado de Vainilla</li>
        <li>Pastel de Manzana</li>
        <li>Milkshake</li>
      </ul>
    </div>
  </div>

  <?php require("footer.php") ?>

</body>

</html>