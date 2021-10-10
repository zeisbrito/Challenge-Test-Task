<?php 
namespace App\Models;

class Furniture extends Product
{
    private $height;
    private $width;
    private $length;
    
    public function __construct($product)
    {
        parent::__construct($product);
        $this->height = $product->height;
        $this->width = $product->width;
        $this->length = $product->length;        
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }
    
    public function getInfos()
    {
        return "Dimension: " . implode("x", [
            $this->getHeight(),
            $this->getWidth(),
            $this->getLength()
        ]);
    }

    public function getNameOfAttrs() {
        return [
            'sku',
            'name',
            'price',
            'type',
            'height',
            'width',
            'length'
        ];
    }
}
