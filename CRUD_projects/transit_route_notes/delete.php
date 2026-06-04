<?php
include "db.php";

$id = $_GET["id"];

$sql = "DELETE FROM notes WHERE note_id = $id";
$conn->query($sql);

header("Location: index.php"); 
exit;
?>
