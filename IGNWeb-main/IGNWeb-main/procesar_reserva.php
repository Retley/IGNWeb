<?php
$conexion = new mysqli("localhost", "root", "", "bucazona_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$restaurante = $_POST['restaurant'];
$fecha_reserva = $_POST['date'];
$hora_reserva = $_POST['time'];
$numero_comensales = $_POST['guests'];
$comentarios = $_POST['comments'];

$sql = "INSERT INTO reservaciones (restaurante, fecha_reserva, hora_reserva, numero_comensales, comentarios) 
        VALUES ('$restaurante', '$fecha_reserva', '$hora_reserva', $numero_comensales, '$comentarios')";

if ($conexion->query($sql) === TRUE) {
    echo "Reserva exitosa";
} else {
    echo "Error en la reserva: " . $conexion->error;
}

$conexion->close();
?>
