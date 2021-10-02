<?php
namespace App\Models;

abstract class Product
{
    private string $sku;
    private string $name;
    private float $price;
    private string $type;

    
    public function __construct($product)
    {
        $this->sku = $product->sku;
        $this->name = $product->name;
        $this->price = $product->price;
        $this->type = $product->type;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return number_format($this->price, 2) . " $";
    }

    public function getType() {
        return $this->type;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public abstract function getInfos();
}
