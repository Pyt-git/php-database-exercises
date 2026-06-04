<?php 
$host = "localhost";
$user = "root"; 
$pass = "";
$db_name = "transit_route_notes";

$conn = new mysql($host, $user, $pass, $db_name);
if ($conn->connect_error) {
  die("connection failed: " . $conn->connect_error)
}
?>
