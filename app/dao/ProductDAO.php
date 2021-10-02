<?php
namespace App\Dao;
use System\DBConnection;
use App\Models\Book;
use App\Models\Dvd;
use App\Models\Furniture;
use App\Models\Product;

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
}
