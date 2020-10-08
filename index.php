<?php
include_once "Models/Product.php";
include_once "Services/ProductManagement.php";

use Services\ProductManagement;
use Models\Product;

$productManager = new ProductManagement();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$product = $productManager->getProduct();
foreach ($product as $product){
    echo $product->getName()."<br/>";
}
