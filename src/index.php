<?php

require '../vendor/autoload.php';

use RedBeanPHP\R;
use RedBeanPHP\RedException\SQL;

R::setup('mysql:host=localhost;dbname=beantest', 'root', '');

$product = R::dispense('product');
$product->productName = "Guitare électrique";
$product->price = 500;
$product->inStock = 42;

try {
    $insertId = R::store($product);
}

catch (SQL $e) {

}