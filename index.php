<?php
include "db.php";

$result = $conn->query("SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Site</title>
</head>
<body>

<h2>User List</h2>

<a href="add.php">Add User</a>

<table border="1">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
