<?php

class ShopProduct {
    public $firstName = "Default first name";
    public $lastName = "Default last name";
    public $price = 5.00;

    public function getFullName() {
        echo $this->firstName . " " . $this->lastName;
    }
}

$product1 = new ShopProduct;
$product2 = new ShopProduct;

var_dump($product1);
var_dump($product2);

$product1->getFullName();