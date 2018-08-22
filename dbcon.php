<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "mano4";
	$conn = new mysqli($host, $username, $password,$db_name);
 
// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>