<? php
$name = $_POST["fullname"];
$email = $_POST["email"];
$age = $_POST["age"];
$color = $_POST["color"];

$photoName = $_FILES["photo"]["name"];
$photoTmp = $_FILES["photo"]["tmp_name"];
move_uploaded_file($photoTmp, "uploads/".$photoName);

echo "<h1>Profile Created</h1>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Age: $age</p>";
echo "<p>Favorite color: $color</p>";
echo "<p>Photo uploaded as: $photoName</p>";
?>



    
