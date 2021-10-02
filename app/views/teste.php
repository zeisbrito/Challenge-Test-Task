<?php
    $host = 'localhost';
    $dbname = 'scandiweb_test';
    $username = 'root';
    $password = '';


try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    // echo "Conection to $dbname in $host success.";
} catch (PDOException $pe) {
    die("Not able to connect to database $dbname:" . $pe->getMessage());
}
