<?php
$conexion = new mysqli("localhost", "root", "", "bucazona_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$username = $_POST['username'];
$contrasena = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, email, telefono, username, contrasena) VALUES ('$nombre', '$email', '$telefono', '$username', '$contrasena')";

if ($conexion->query($sql) === TRUE) {
    header("Location: login.html");
    exit();
} else {
    echo "Error en el registro: " . $conexion->error;
}

$conexion->close();
?>
