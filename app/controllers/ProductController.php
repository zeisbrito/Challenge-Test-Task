<?php
namespace App\Controllers;
use App\Dao\ProductDAO;

class ProductController extends Controller
{
    public function index()
    {
        $dao = new ProductDAO();
        $products = $dao->getAll();
        $this->view("product-list", compact("products"));
    }

    public function new()
    {
        $this->view("add-product");
    }

    public function list()
    {
        $this->view("product-list");
    }
}
