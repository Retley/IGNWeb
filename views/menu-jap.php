<!DOCTYPE html>
<html lang="es">
<?php

require("dir.php");

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sakura Sushi & Grill</title>
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
    <img src="<?php echo $STATIC?>\sushi.jpg" alt="Restaurante 1">
    <div class="restaurant-info">
      <h3>Sakura Sushi & Grill</h3>
      <p>En "Sakura Sushi & Grill", te invitamos a explorar la riqueza de la cocina japonesa en un ambiente elegante y
        acogedor. Nuestra carta presenta una amplia gama de opciones, desde sushi y sashimi frescos hasta platos de
        teppanyaki preparados con destreza frente a tus ojos. Cada bocado es una obra de arte, preparada con los
        ingredientes más frescos y auténticos. Disfruta de la serenidad de nuestra decoración japonesa mientras
        saboreas sabores exquisitos que te transportarán a las calles de Tokio.</p>
      <p>Puntuación: ★★★★☆</p>
      <p>Precio: $$</p>
      <a href="reserva.html" class="reserva">Reservar</a>
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
  
  <footer>
    <div class="footer-logo">
      <img src="<?php echo $STATIC?>\Logo-Rest.png" alt="Banner del inicio">
    </div>
    <div class="contact-icons">
      <a href="tel:12345"><img src="<?php echo $STATIC?>\phone.png" alt="Teléfono"></a>
      <a href="mailto:info@restaurantexyz.com"><img src="<?php echo $STATIC?>\email.png" alt="Correo Electrónico"></a>
      <a href="https://www.facebook.com/restaurantexyz"><img src="<?php echo $STATIC?>\Facebook.png" alt="Facebook"></a>
    </div>
    <p>Derechos de Autor © 2023 BucaZona. Todos los derechos reservados.

      El contenido de este sitio web, incluyendo, pero no limitado a, texto, gráficos, logotipos, imágenes, archivos de
      audio y video, y software, es propiedad de BucaZona y está protegido por las leyes de derechos de autor de Panamá.
      Ningún contenido de este sitio web puede ser copiado, reproducido, modificado, distribuido, transmitido,
      republicado, exhibido o vendido sin el consentimiento previo por escrito de BucaZona.

      Se permite la descarga y copia de materiales en este sitio web únicamente para uso personal y no comercial.
      Cualquier otro uso, incluyendo, entre otros, la reproducción, modificación, distribución, transmisión o
      exhibición, está estrictamente prohibido.

      BucaZona se reserva el derecho de modificar o eliminar cualquier contenido, características o servicios de este
      sitio web en cualquier momento y sin previo aviso.

      Todas las marcas registradas y logotipos utilizados en este sitio web son propiedad de sus respectivos
      propietarios y se utilizan con permiso.

      Este sitio web puede contener enlaces a sitios web de terceros. BucaZona no se hace responsable por el contenido
      de estos sitios web de terceros y no respalda ni garantiza la exactitud de la información contenida en ellos.

      Cualquier pregunta o solicitud relacionada con los derechos de autor de este sitio web puede dirigirse a nuestros
      contactos.
      Gracias por visitar nuestro sitio web. Valoramos y respetamos los derechos de autor y esperamos que disfrutes de
      tu experiencia en BucaZona.
    </p>
  </footer>

  <script src="script.js"></script>
</body>

</html>