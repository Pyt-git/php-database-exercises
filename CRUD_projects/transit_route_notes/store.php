<?php
include "db.php"; 
if ($SERVER["REQUEST_METHOD"] == "POST") {
  $route_id = $_POST['route_id'];
  $note_text = $_POST['note_text'];
  $sql = "INSERT INTO products(route_id, note_text)VALUES('$route_id', '$note_text')";
  $conn->query($sql);
  header("location: index.php");
  exit;
}
?>
