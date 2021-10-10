<?php
namespace App\Controllers;
use App\Dao\ProductDAO;

class ProductController extends Controller
{
    // Start for view products method
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

    // Start for add new product method 
    public function save()
    {
        $data = (object) $_POST;
        $dao = new ProductDAO();
        $dao->save($data);

        header('Location: ' . $this->curPageURL() . '?c=Product');
    }

    // Start for MASS DELETE method
    public function delete()
    {
        $datadel = $_POST['sku'];
        $dao = new ProductDAO();
        $dao->delete($datadel);

        header('Location: ' . $this->curPageURL() . '?c=Product');
    }
}
