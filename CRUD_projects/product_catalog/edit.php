<?php
include "db.php";
$id = $_GET["id"];
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);
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
      <input type="hidden" name="id" value="<?=$row['id']?>">
      <label for="name">Name:</label><br>
      <input id="name" type="text" name="name" value="<?=$row['name']?>"required<br><br>

      <label for="price">Price:</label><br>
      <input id="price" type="text" name="price" value="<?=$row['price']?>"required<br><br>

      <label for="category">Category:</label><br>
      <input id="category" type="text" name="category" value="<?=$row['category']?>"required<br><br>

      <label for="quantity">Quantity:</label><br>
      <input id="quantity" type="number" name="quantity" value="<?=$row['quantity']?>"required<br><br>

      <button type="submit">Update</button>
    </form>
  </body>
</html>
