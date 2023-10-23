<?php
// Definir el array de productos con precios y cantidades
$productos = array(
    array("nombre" => "Producto 1", "precio" => 10.00, "cantidad" => 2),
    array("nombre" => "Producto 2", "precio" => 15.50, "cantidad" => 1),
    array("nombre" => "Producto 3", "precio" => 5.25, "cantidad" => 3)
);

// Inicializar la variable para el total
$total = 0;

// Calcular el total gastado
foreach ($productos as $producto) {
    $precio = $producto["precio"];
    $cantidad = $producto["cantidad"];
    $subtotal = $precio * $cantidad;
    $total += $subtotal;
}

// Mostrar el total gastado
echo "Total gastado en el carrito de compras: $" . number_format($total, 2);
?>