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

    public function curPageURL()
    {
        $pageURL = 'http';
        if (isset($_SERVER["HTTPS"] ) && $_SERVER["HTTPS"] == "on") {
            $pageURL .= "s";
        }
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"] . ":" .
                $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        $pageURL = strtok($pageURL, '?');
        return $pageURL;
    }

    public function redirect($page) {
        header('Location: ' . $this->curPageURL() . $page);
    }
}
