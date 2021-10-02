<?php
// require_once '../../system/dbconnect.php';
require_once '../../system/pdoconfig.php';

try {
    $PDO = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo 'Error to connect with the MySQL: ' . $e->getMessage();
}


$sql = "SELECT * FROM products";
$result = $PDO->query($sql);
$rows = $result->fetchAll(PDO::FETCH_ASSOC);

// print_r($rows);
