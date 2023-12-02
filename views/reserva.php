<?php 

session_start();
require("dir.php");
require_once("connection.php");
require_once("models/restaurants.php");

$rest = new Restaurant(connect()); 

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BucaZona - Reserva de Restaurante</title>
    <link rel="stylesheet" href="<?php echo $STATIC ?>\style.css"> 
</head>

<body>

    <?php require("header.php") ?>

    <div class="reservation-form">
        <div class="reservation-form-box">
            <h2>Reservar en un Restaurante</h2>
            <form action="/ing-web/book" method="post">
                <label for="restaurant">Restaurante:</label>
                <select id="restaurant" name="restaurant">
                    <option value="null" selected disabled hidden></option>
                <?php
                
                $rest_list = $rest->get_all_restaurants();

                foreach ($rest_list as $restaurant) {
                    echo "<option value=\"".$restaurant["id"]."\">".$restaurant["nombre"]."</option>";
                }
                
                ?>
                </select>

                <label for="date">Fecha de Reserva:</label>
                <input class="user-control" type="date" id="date" name="date" required>

                <label for="time">Hora de Reserva:</label>
                <input class="user-control" type="time" id="time" name="time" required>

                <label for="guests">Número de Comensales:</label>
                <input class="user-control" type="number" id="guests" name="guests" min="1" required>

                <label for="comments">Comentarios adicionales:</label>
                <textarea id="comments" name="comments" rows="4" placeholder="Indica tus preferencias o requerimientos especiales"></textarea>

                <input class="user-control" name="book" type="submit" value="Reservar" style="background-color: #46409C; color: white; font-weight: bold;">
            </form>
        </div>
    </div>

    <?php require("footer.php") ?>

</body>

</html>