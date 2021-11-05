<?php
namespace App\Dao;
use System\DBConnection;
use App\Models\Book;
use App\Models\Dvd;
use App\Models\Furniture;

class ProductDAO extends DBConnection {

    private $types;

    public function __construct()
    {
        parent::__construct();
        $this->getConnection();
        $this->types = [
            1 => Book::class,
            2 => Dvd::class,
            3 => Furniture::class
        ];
    }

    // View products method
    public function getAll()
    {
        $sql = "SELECT * FROM products ORDER BY id";
        $result = $this->conn->query($sql);
        $result->setFetchMode(\PDO::FETCH_OBJ);
        return $this->handleAll($result->fetchAll());
    }

    public function handleAll($products)
    {
        return array_map(function($product)
        {
            return new $this->types[$product->type]($product);
        }, $products);
    }

    // add new product method
    public function save($data)
    {
        $product = new $this->types[$data->type]($data);
        $sql = "INSERT INTO products(". implode(', ', $product->getNameOfAttrs()) .") VALUES (:". implode(', :', $product->getNameOfAttrs()) .")";
        $result = $this->conn->prepare($sql);

        foreach($product->getNameOfAttrs() as $attr) {
            $result->bindValue(':'.$attr, $product->{'get'.ucfirst($attr)}());
        }
        $result->execute();
        return;
    }

    // MASS DELETE method
    public function delete($datadel)
    {
        $sql = 'DELETE FROM products WHERE sku = :sku';
        $result = $this->conn->prepare($sql);

        if(isset($datadel)){
            foreach($datadel as $sku){
                $result->bindParam(':sku', $sku);
                $result->execute();
            }
        } else {
            return;
        }
        return;
    }
}
