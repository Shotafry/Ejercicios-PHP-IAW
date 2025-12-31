<?php
// Estos son los productos que hemos comprado
$carrito = [    
    ["producto" => "Portátil", "precio" => 1200, "cantidad" => 1],    
    ["producto" => "Ratón", "precio" => 25, "cantidad" => 2],    
    ["producto" => "Teclado", "precio" => 45, "cantidad" => 1],
];

// Función para sumar el precio de todo lo que hay en la lista
function calcularTotal($carrito) {
    $sumaDeTodo = 0;
    foreach ($carrito as $item) {
        // Multiplicamos el precio por la cantidad de cada producto
        $precioProducto = $item["precio"] * $item["cantidad"];
        $sumaDeTodo = $sumaDeTodo + $precioProducto;
    }
    return $sumaDeTodo;
}

$totalSinDescuento = calcularTotal($carrito);
$dineroDescontado = 0;
$textoDescuento = "No hay descuento";

// Miramos si nos toca algún descuento por gastar mucho dinero
if ($totalSinDescuento > 1000) {
    $dineroDescontado = $totalSinDescuento * 0.10; // Quitamos el 10%
    $textoDescuento = "10%";
} elseif ($totalSinDescuento > 500) {
    $dineroDescontado = $totalSinDescuento * 0.05; // Quitamos el 5%
    $textoDescuento = "5%";
}

// El precio final es el total menos el descuento que nos toque
$precioFinal = $totalSinDescuento - $dineroDescontado;

// Mostramos la lista de lo que hemos comprado
echo "Lista de la compra:<br>";
foreach ($carrito as $item) {
    $subtotal = $item["precio"] * $item["cantidad"];
    echo "Producto: " . $item["producto"] . " | Precio: " . $item["precio"] . "€ | Cantidad: " . $item["cantidad"] . " | Subtotal: " . $subtotal . "€<br>";
}

// Mostramos los precios finales
echo "<br>Precio total: " . $totalSinDescuento . "€";
echo "<br>Descuento aplicado: " . $textoDescuento . " (" . $dineroDescontado . "€)";
echo "<br>Total a pagar: " . $precioFinal . "€";
?>