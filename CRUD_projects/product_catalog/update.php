<?php
include "db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$category = $_POST["category"];
$quantity = $_POST["quantity"];

$sql = "UPDATE products 
        SET name='$name', price='$price', category='$category', quantity='$quantity'
        WHERE id = $id"; 

$conn->query($sql);

header("location: index.php");
exit;
?>

