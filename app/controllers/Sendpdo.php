<?php
require_once '../../system/DBConnection.php';

class Sendpdo {
function bindParam(
    $param,
    &$var,
    $type = PDO::PARAM_STR,
    $maxLength = null,
    $driverOptions = null
) {}
}

extract($_POST);

$newproduct = $conn->prepare("INSERT INTO products(sku, name, price, type, size, weight, height, width, length) VALUES (:sku, :name, :price, :type, :size, :weight, :height, :width, :length)");

$newproduct->bindParam(':sku', $sku);
$newproduct->bindParam(':name', $name);
$newproduct->bindParam(':price', $price);
$newproduct->bindParam(':type', $type);
$newproduct->bindParam(':size', $size);
$newproduct->bindParam(':weight', $weight);
$newproduct->bindParam(':height', $height);
$newproduct->bindParam(':width', $width);
$newproduct->bindParam(':length', $length);

if($newproduct->execute()){
    header("Location: ../../");
    // echo "Item added successfully";
 } // else {
//     echo "Unable to add item";
// }
