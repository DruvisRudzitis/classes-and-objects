<?php

require_once 'Product.php';


$products = [
    $mouse = new Product( "Logitech mouse", 70.00, 14),
    $phone = new Product( "iPhone 5s", 999.99, 3),
    $printer = new Product( "Epson EB-U05", 440.46, 1)
];

foreach ($products as $product) {
    $product->printProduct();
}

echo "\n";

$phone->setPrice(99.00);
$printer->setAmount(2);

foreach ($products as $product) {
    $product->printProduct();
}