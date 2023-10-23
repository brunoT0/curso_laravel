<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];

    // Verificar si los lados pueden formar un triángulo
    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        // Determinar el tipo de triángulo
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Pueden formar un triángulo equilátero.";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "Pueden formar un triángulo isósceles.";
        } else {
            echo "Pueden formar un triángulo escaleno.";
        }
    } else {
        echo "No pueden formar un triángulo con estas longitudes.";
    }
}
?>

<!-- Formulario para ingresar las longitudes -->
<form method="post" action="">
    <label for="lado1">Longitud del lado 1:</label>
    <input type="number" name="lado1" required>

    <label for="lado2">Longitud del lado 2:</label>
    <input type="number" name="lado2" required>

    <label for="lado3">Longitud del lado 3:</label>
    <input type="number" name="lado3" required>

    <button type="submit">Verificar</button>
</form>