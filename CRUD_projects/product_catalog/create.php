<!DOCTYPE html>
<html>
  <head>
    <title>Create Product</title>
  </head>
  <body>

    <h1>Add new product</h1>
    <form action="store.php" method="POST">
      <label for="name">Name:</label><br>
      <input id="name" type="text" name="name"required<br><br>

      <label for="price">Price:</label><br>
      <input id="price" type="text" name="price"required<br><br>

      <label for="category">Category:</label><br>
      <input id="category" type="text" name="category"required<br><br>

      <label for="quantity">Quantity:</label><br>
      <input id="quantity" type="number" name="quantity"required<br><br>

      <button type="submit">Save</button>
    </form>
  </body>
</html>
