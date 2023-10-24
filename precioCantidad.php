<?php
require 'inex.php';
$xml = simplexml_load_file('productos.xml');
$total = 0;

foreach ($xml->producto as $producto) {
    $nombre = (string) $producto->nombre;
    $precio = (float) $producto->precio;
    $cantidad = (int) $producto->cantidad;

    $valorTotal = $precio * $cantidad;
    $total += $valorTotal;

    echo "Producto: $nombre - Valor Total: $valorTotal <br>";
}
echo "Valor Total de todos los productos: $total <br>";
?>