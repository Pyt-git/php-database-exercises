SELECT notes.id, notes.note_text, notes.note_time, routes.route_number, routes.route_name
FROM notes
JOIN routes ON notes.route_id = routes.id;

<?php
include "db.php";
$sql = "SELECT notes.id, notes.note_text, notes.note_time, routes.route_number, routes.route_name
        FROM notes
        JOIN routes ON notes.route_id = routes.id";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Routes</title>
  </head>
  <body>
    <h1>Routes</h1>

    <a href="create.php">Add new route</a>
    <br>
    <br>

    <table border="1" cellpadding="10">
      <tr>
        <th>ID</th>
        <th>Route_number</th>
        <th>Route_name</th>
        <th>Operator</th>
      </tr>
    </table>
    <table border="1" cellpadding="10">
      <tr>
         <th>ID</th>
         <th>Route_id</th>
         <th>Note_name</th>
      </tr>
    </table>

      <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?=$row['note_id']?></td>
        <td><?=$row['note_text']?></td>
        <td><?=$row['note_time']?></td>
        <td><?=$row['route_number']?></td>
        <td><?=$row['route_name']?></td>
        <td>
          <a href="edit.php?id<?=$row['id']">Edit</a> |
          <a href="delete.php?id<?=$row['id']">Delete</a>
        </td>
      </tr>
      <?php endwhile;?>
    </table>
  </body>
</html>
