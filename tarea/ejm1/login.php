<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: bienvenido.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $lines = file("usuarios.txt");

    foreach ($lines as $line) {
        list($nombre, $storedEmail, $storedPassword) = explode(",", trim($line));

        if ($email === $storedEmail && password_verify($password, $storedPassword)) {
            $_SESSION['usuario'] = $nombre;
            header("Location: bienvenido.php");
        }
    }

    echo "Credenciales incorrectas.";
}
?>

<!-- Formulario de inicio de sesión -->
<form method="post" action="login.php">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Iniciar sesión</button>
</form>