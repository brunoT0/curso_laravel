<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Encripta la contraseña

    $usuario = "$nombre,$email,$password\n";
    file_put_contents("usuarios.txt", $usuario, FILE_APPEND);

    echo "Usuario registrado correctamente.";
}
?>

<!-- Formulario de registro -->
<form method="post" action="registro.php">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <button type="submit">Registrarse</button>
</form>