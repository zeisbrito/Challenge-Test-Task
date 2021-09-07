<?php
namespace App\Controllers;

class Controller
{
    public function view($name, $data = null){
        if(is_array($data) && count($data) > 0) {
            extract($data);
        }
        require_once __DIR__ . "/../views/" . $name . ".php";
    }
}

