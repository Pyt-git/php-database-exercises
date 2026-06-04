<?php
include "db.php"; 
if ($SERVER["REQUEST_METHOD"] == "POST") {
  $route_id = $_POST['route_id'];
  $n = $_POST['price'];
  $category = $_POST['category'];
  $quantity = $_POST['quantity'];
  $sql = "INSERT INTO products(id, name, price, category, quantity)VALUES('$name', '$price', '$category', '$quantity')";
  $conn->query($sql);
  header("location: index.php");
  exit;
}
?>
