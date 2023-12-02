<?php session_start() ?>
<?php require("dir.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mariscos del Mar Azul</title>
  <link rel="icon" href="<?php echo $STATIC ?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css">
</head>

<body>
  <?php require("header.php") ?>

  <div class="restaurant-info">
    <img src="<?php echo $STATIC ?>\shrimps.jpg" alt="Restaurante 1">
    <h3>Mariscos del Mar Azul</h3>
    <p>En "Mariscos del Mar Azul", nos enorgullece ofrecer una experiencia culinaria en el océano. Nuestro
      restaurante es un santuario para los amantes de los mariscos, donde la frescura y la calidad son nuestras
      principales prioridades. Desde pescado a la parrilla con una selección de salsas únicas hasta camarones a la
      mantequilla de ajo y cangrejo relleno, cada plato es una obra maestra del sabor marino. Sumérgete en nuestra
      selección de vinos y disfruta de la brisa del océano en nuestro comedor con vista al mar. En "Mariscos del Mar
      Azul", te invitamos a explorar el mundo de los sabores del mar.</p>
    <p>Puntuación: ★★★☆☆</p>
    <p>Precio: $$$</p>
    <a href="<?php if(logged_in()) echo "/ing-web/book"; else echo "/ing-web/login"; ?>" class="reserva">Reservar</a> 
  </div>

  <div class="menu">
    <div class="menu-item">
      <h4>Entradas</h4>
      <ul>
        <li>Ceviche de Camarones</li>
        <li>Almejas a la Parmesana</li>
        <li>Cangrejo Relleno con Queso</li>
      </ul>
    </div>
    <div class "menu-item">
      <h4>Platos Principales</h4>
      <ul>
        <li>Pescado a la Parrilla</li>
        <li>Camarones a la Mantequilla de Ajo</li>
        <li>Lobster Roll</li>
      </ul>
    </div>
    <div class="menu-item">
      <h4>Postres</h4>
      <ul>
        <li>Pastel de Limón</li>
        <li>Pie de Maracuyá</li>
        <li>Helado de Mariscos</li>
      </ul>
    </div>
  </div>

  <?php require("footer.php") ?>

</body>

</html>