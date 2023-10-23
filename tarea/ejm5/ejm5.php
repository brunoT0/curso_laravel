<?php
// Definir la lista
$lista = array("manzana", "naranja", "manzana", "plátano", "manzana", "uva");

// Elemento específico a contar
$elemento = "manzana";

// Inicializar el contador
$contador = 0;

// Recorrer la lista y contar ocurrencias
foreach ($lista as $item) {
    if ($item == $elemento) {
        
        $
$contador++;
    }
}

// Mostrar el resultado
echo "El elemento '$elemento' aparece $contador veces en la lista.";
?>