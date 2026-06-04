<?php
include "db.php"; 
if ($SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $category = $_POST['category'];
  $quantity = $_POST['quantity'];
  $sql = "INSERT INTO products(id, name, price, category, quantity)VALUES('$name', '$price', '$category', '$quantity')";
  $conn->query($sql);
  header("location: index.php");
  exit;
}
?>
