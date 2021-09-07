<?php
namespace App\Models;

class Product
{
    private int $sku;
    private string $name;
    private float $price;

    
    // public function __construct($name)
    // {
    //     $this->name = $name;
    // }

    public function getName() {
        return $this->name;
    }

    public function setName(string $name) {
        $this->name = $name;
    }
}
