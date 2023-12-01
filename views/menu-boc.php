<!DOCTYPE html>
<html lang="es">
<?php

require("dir.php");

?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bocado Express</title>
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
    <img src="<?php echo $STATIC?>\hotdog.jpg" alt="Restaurante 1">
    <h3>Bocado Express</h3>
    <p>"Bocado Express" es tu destino para satisfacer tus antojos con comidas rápidas y deliciosas. Nuestro menú
      ofrece una amplia variedad de opciones tentadoras, desde nuestras hamburguesas jugosas y papas fritas
      crujientes hasta nuestros famosos aros de cebolla y pollo frito irresistible. Utilizamos ingredientes frescos
      y de alta calidad para garantizar que cada bocado sea una experiencia deliciosa. Ya sea para llevar o para
      disfrutar en nuestro acogedor comedor, "Bocado Express" te ofrece la comodidad y el sabor que anhelas.</p>
    <p>Puntuación: ★★★★☆</p>
    <p>Precio: $</p>
    <a href="reservation.html" class="reserva">Reserva ahora</a>
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

  <footer>
    <div class="footer-logo">
      <img src="<?php echo $STATIC?>\Logo-Rest.png" alt="Banner del inicio">
    </div>
    <div class="contact-icons">
      <a href="tel:12345"><img src="<?php echo $STATIC?>\phone.png" alt="Teléfono"></a>
      <a href="mailto:info@restaurantexyz.com"><img src="<?php echo $STATIC?>\email.png" alt="Correo Electrónico"></a>
      <a href="https://www.facebook.com/restaurantexyz"><img src="<?php echo $STATIC?>\Facebook.png" alt="Facebook"></a>
    </div>
    <p>Derechos de Autor © 2023 Bocado Express. Todos los derechos reservados.

      El contenido de este sitio web, incluyendo, pero no limitado a, texto, gráficos, logotipos, imágenes, archivos de
      audio y video, y software, es propiedad de Bocado Express y está protegido por las leyes de derechos de autor de Panamá.
      Ningún contenido de este sitio web puede ser copiado, reproducido, modificado, distribuido, transmitido,
      republicado, exhibido o vendido sin el consentimiento previo por escrito de Bocado Express.

      Se permite la descarga y copia de materiales en este sitio web únicamente para uso personal y no comercial.
      Cualquier otro uso, incluyendo, entre otros, la reproducción, modificación, distribución, transmisión o
      exhibición, está estrictamente prohibido.

      Bocado Express se reserva el derecho de modificar o eliminar cualquier contenido, características o servicios de este
      sitio web en cualquier momento y sin previo aviso.

      Todas las marcas registradas y logotipos utilizados en este sitio web son propiedad de sus respectivos
      propietarios y se utilizan con permiso.

      Este sitio web puede contener enlaces a sitios web de terceros. Bocado Express no se hace responsable por el contenido
      de estos sitios web de terceros y no respalda ni garantiza la exactitud de la información contenida en ellos.

      Cualquier pregunta o solicitud relacionada con los derechos de autor de este sitio web puede dirigirse a nuestros
      contactos.
      Gracias por visitar nuestro sitio web. Valoramos y respetamos los derechos de autor y esperamos que disfrutes de
      tu experiencia en Bocado Express.
    </p>
  </footer>

</body>
</html>
