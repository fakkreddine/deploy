<?php
include "db.php";

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name,email) VALUES ('$name','$email')";
$conn->query($sql);

header("Location: index.php");

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add User</title>
</head>
<body>

<h2>Add User</h2>

<form method="POST">

Name:<br>
<input type="text" name="name"><br><br>

Email:<br>
<input type="text" name="email"><br><br>

<input type="submit" name="submit" value="Add">

</form>

</body>
</html>
