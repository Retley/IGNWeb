<!DOCTYPE html>
<html lang="es">
<?php

require("dir.php");

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La Casa del Sabor Mexicano</title>
  <link rel="icon" href="<?php echo $STATIC?>\silverware-png.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $STATIC?>\style.css">
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

  <div class="restaurant-info">
    <img src="<?php echo $STATIC?>\burritos.jpg" alt="Restaurante 1">
    <h3>La Casa del Sabor Mexicano</h3>
    <p>"La Casa del Sabor Mexicano" es un rincón de México en el corazón de la ciudad. Aquí, celebramos la rica
      tradición de la comida mexicana con una explosión de sabores y colores. Nuestra carta es un viaje culinario
      que incluye platos icónicos como tacos al pastor, enchiladas suizas, guacamole fresco y margaritas
      artesanales. Cada plato es una representación auténtica de la diversidad y la pasión de la cocina mexicana. En
      "La Casa del Sabor Mexicano", la comida es una fiesta y nuestros comensales son nuestros invitados de honor.
    </p>
    <p>Puntuación: ★★★★★</p>
    <p>Precio: $</p>
    <a href="reservation.html" class="reserva">Reserva ahora</a>
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

  <footer>
    <div class="footer-logo">
      <img src="<?php echo $STATIC?>\Logo-Rest.png" alt="Banner del inicio">
    </div>
    <div class="contact-icons">
      <a href="tel:12345"><img src="<?php echo $STATIC?>\phone.png" alt="Teléfono"></a>
      <a href="mailto:info@restaurantexyz.com"><img src="<?php echo $STATIC?>\email.png" alt="Correo Electrónico"></a>
      <a href="https://www.facebook.com/restaurantexyz"><img src="<?php echo $STATIC?>\Facebook.png" alt="Facebook"></a>
    </div>
    <p>Derechos de Autor © 2023 La Casa del Sabor Mexicano. Todos los derechos reservados.

      El contenido de este sitio web, incluyendo, pero no limitado a, texto, gráficos, logotipos, imágenes, archivos de
      audio y video, y software, es propiedad de La Casa del Sabor Mexicano y está protegido por las leyes de derechos de autor de México.
      Ningún contenido de este sitio web puede ser copiado, reproducido, modificado, distribuido, transmitido,
      republicado, exhibido o vendido sin el consentimiento previo por escrito de La Casa del Sabor Mexicano.

      Se permite la descarga y copia de materiales en este sitio web únicamente para uso personal y no comercial.
      Cualquier otro uso, incluyendo, entre otros, la reproducción, modificación, distribución, transmisión o
      exhibición, está estrictamente prohibido.

      La Casa del Sabor Mexicano se reserva el derecho de modificar o eliminar cualquier contenido, características o servicios de este
      sitio web en cualquier momento y sin previo aviso.

      Todas las marcas registradas y logotipos utilizados en este sitio web son propiedad de sus respectivos
      propietarios y se utilizan con permiso.

      Este sitio web puede contener enlaces a sitios web de terceros. La Casa del Sabor Mexicano no se hace responsable por el contenido
      de estos sitios web de terceros y no respalda ni garantiza la exactitud de la información contenida en ellos.

      Cualquier pregunta o solicitud relacionada con los derechos de autor de este sitio web puede dirigirse a nuestros
      contactos.
      Gracias por visitar nuestro sitio web. Valoramos y respetamos los derechos de autor y esperamos que disfrutes de
      tu experiencia en La Casa del Sabor Mexicano.
    </p>
  </footer>

</body>
</html>
