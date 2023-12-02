<?php

class Booking{
    private $conn;

    function __construct(mysqli $connection){
        $this -> conn = $connection;
    }

    function create_booking(int $userid, int $restaurant, string $date, string $time, int $guests, string $comments){
        $st = $this -> conn -> prepare("INSERT INTO reservas (id_usuario, id_restaurante, fecha, hora, invitados, comentarios) VALUES (?, ?, ?, ?, ?, ?)");
        $st -> bind_param("iissis", $userid, $restaurant, $date, $time, $guests, $comments);
        $st -> execute();
        return ($st -> affected_rows > 0);
    }
    

}

?>