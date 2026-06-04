<?php
include "db.php";
$id = $_GET["id"];
$routes_sql = "SELECT * FROM routes";
$result = $conn->query($routes_sql);
$row = $result->fetch_assoc();
?>

  
<!DOCTYPE html>
<html>
  <head>
    <title>Create Product</title>
  </head>
  <body>

    <h1>Add new product</h1>
    <form action="update.php" method="POST">
     <label>Route</label>
      <select name="route_id">
        <?php while ($r = $routes_result->fetch_assoc()): ?>
            <option value="<?= $r['id'] ?>"
              <?= $r['id'] == $row['route_id'] ? 'selected' : ''?>>
              <?= $r['route_number'] ?> - <?= $r['route_name'] ?>
            </option>
        <?php endwhile; ?>
      </select>
      <button type="submit">Update</button>
    </form>
  </body>
</html>
