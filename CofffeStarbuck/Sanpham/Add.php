<?php
require_once 'db.php';


$conn = new mysqli($servername, $username, $password, $dbname);
if($conn>mysqli_connect_error) die($conn->connect_error);
$query ="INSERT INTO products VALUES(NULL,NULL,NULL,NULL,NULL)";
$result = $conn->query($query);
if(!$result) die("Database access failed: ".$conn->error);
echo "The Insert ID was: ".$conn->insert_id;
?>
