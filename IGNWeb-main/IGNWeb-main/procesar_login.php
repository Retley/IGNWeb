<?php
$conexion = new mysqli("localhost", "root", "", "bucazona_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE username='$username'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    if (password_verify($password, $fila['contrasena'])) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit();
    } else {
        echo "Contraseña incorrecta. <a href='login.html'>Volver a intentar</a>";
    }
} else {
    echo "Usuario no encontrado. <a href='login.html'>Volver a intentar</a>";
}

$conexion->close();
?>
