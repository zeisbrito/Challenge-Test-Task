<?php

use App\Controllers\IndexController;

require_once __DIR__ . "/vendor/autoload.php";

$c = $_GET["c"] ?? "Index";
$a = $_GET["a"] ?? "index";

$controller = "App\Controllers\\" . ucfirst($c) . "Controller";

$app = new $controller();

$app->$a();
