<?php 
namespace App\Models;

class Dvd extends Product
{
    private $size;

    public function __construct($product)
    {
        parent::__construct($product);
        $this->size = $product->size;        
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getInfos()
    {
        return "Size: " . $this->getSize() . " MB";
    }

    public function getNameOfAttrs() {
        return [
            'sku',
            'name',
            'price',
            'type',
            'size'
        ];
    }
}
