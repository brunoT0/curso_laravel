<?php
// Definir el array de frutas
$frutas = array("manzana", "naranja", "plátano", "uva", "pera");

// Fruta específica a buscar
$frutaABuscar = "naranja";

// Verificar si la fruta se encuentra en el array
if (in_array($frutaABuscar, $frutas)) {
    echo "La fruta '$frutaABuscar' se encuentra en el array de frutas.";
} else {
    echo "La fruta '$frutaABuscar' no se encuentra en el array de frutas.";
}
?>






