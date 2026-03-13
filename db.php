<?php

$host = "localhost";
$user = "root";
$password = "Fakkreddine2003@";
$database = "simple_site";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
