<?php
include "db.php";

$id = $_POST["id"];
$route_id = $_POST["route_id"];
$note_text = $_POST["note_text"];

$sql = "UPDATE notes 
        SET route_id='$route_id', note_text='$note_text'
        WHERE note_id = $id"; 

$conn->query($sql);

header("location: index.php");
exit;
?>
