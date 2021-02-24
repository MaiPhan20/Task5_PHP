<?php
require_once 'db.php';


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn>mysqli_connect_error) die($conn->connect_error);
$query = "UPDATE products SET id = '1' WHERE id ='2'";
$result = $conn->query($query);
if(!$result) die("Database access failed: " .$conn->error);