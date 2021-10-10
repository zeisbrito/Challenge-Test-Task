<?php 
namespace App\Models;

class Book extends Product
{
    private $weight;

    public function __construct($product)
    {
        parent::__construct($product);
        $this->weight = $product->weight;        
    }
    
    public function getWeight()
    {
        return $this->weight;
    }

    public function getInfos()
    {
        return "Weight: " . $this->getWeight() . " KG";
    }

    public function getNameOfAttrs() {
        return [
            'sku',
            'name',
            'price',
            'type',
            'weight'
        ];
    }
}
