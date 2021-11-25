<?php
$server = "20.124.34.65";
$username = "cloud";
$password = "$4muD4t4";
$database = "proyecto";

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
