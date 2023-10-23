<?php
function esCorreoElectronicoValido($email) {
    // Patrón para validar direcciones de correo electrónico
    $patron = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    // Realizar la verificación
    if (preg_match($patron, $email)) {
        return true; // Es una dirección de correo electrónico válida
    } else {
        return false; // No es una dirección de correo electrónico válida
    }
}

// Ejemplo de uso:
$email = "usuario@example.com";
if (esCorreoElectronicoValido($email)) {
    echo "La dirección de correo electrónico es válida.";
} else {
    echo "La dirección de correo electrónico no es válida.";
}
?>