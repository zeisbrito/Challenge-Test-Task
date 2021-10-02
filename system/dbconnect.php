<?php
require_once 'pdoconfig.php';

try {
    $conn = new PDO("mysql:host={$db['host']}; dbname={$db['dbname']}", $db['username'], $db['password']);
    echo "Conection to $dbname in $host success.";
} catch (PDOException $pe) {
    die("Not able to connect to database $dbname:" . $pe->getMessage());
}
