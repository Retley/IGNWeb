<!DOCTYPE html>
<html lang="es">

<?php require("dir.php") ?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BucaZona</title>
  <link rel="icon" href="<?php echo $STATIC?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC?>\style.css ">
</head>

<body>

  <header>
    <div class="logo">
      <img src="<?php echo $STATIC?>\Logo-Rest.png" alt="Banner del restaurante">
      <h1>BucaZona</h1>
      <a href="filter.html" class="filter-button">Herramienta de Filtrado</a>
    </div>
    <div>
      <a href="perfil.html" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; color: white; text-decoration: none;">
        <img src="<?php echo $STATIC?>\Perfil.png" alt="ícono de perfil" class="profile-icon" style="margin: 0;">
        <p>Perfil</p>

      </a>
    </div>
  </header>

  <div class="restaurant-page">
    <img src="<?php echo $STATIC?>\lasagna.jpg" alt="Restaurante 1">
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
      <a href="reserva.html" class="reserva">Reservar</a>
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

  <footer>
    <div class="footer-logo">
      <img src="<?php echo $STATIC?>\Logo-Rest.png" alt="Banner del inicio">
    </div>
    <div class="contact-icons">
      <a href="tel:12345"><img src="<?php echo $STATIC?>\phone.png" alt="Teléfono"></a>
      <a href="mailto:info@restaurantexyz.com"><img src="<?php echo $STATIC?>\email.png" alt="Correo Electrónico"></a>
      <a href="https://www.facebook.com/restaurantexyz"><img src="<?php echo $STATIC?>\Facebook.png" alt="Facebook"></a>
    </div>
    <p>Derechos de Autor © 2023 BucaZona. Todos los derechos reservados. El contenido de este sitio web, incluyendo,
      pero no
      limitado a, texto, gráficos, logotipos, imágenes, archivos de audio y video, y software, es propiedad de BucaZona
      y
      está protegido por las leyes de derechos de autor de Panamá. Ningún contenido de este sitio web puede ser copiado,
      reproducido, modificado, distribuido, transmitido, republicado, exhibido o vendido sin el consentimiento previo
      por
      escrito de BucaZona.</p>
  </footer>

</body>

</html>