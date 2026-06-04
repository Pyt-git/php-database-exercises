SELECT * FROM products;

<?php
include "db.php";
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Product Catalog</title>
  </head>
  <body>
    <h1>Product catalog</h1>

    <a href="create.php">Add new product</a>
    <br>
    <br>

    <table border="1" cellpadding="10">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Quantity</th>
      </tr>

      <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['price']?></td>
        <td><?=$row['category']?></td>
        <td><?=$row['quantity']?></td>
        <td>
          <a href="edit.php?id<?=$row['id']">Edit</a> |
          <a href="delete.php?id<?=$row['id']">Delete</a>
        </td>
      </tr>
      <?php endwhile;?>
    </table>
  </body>
</html>
