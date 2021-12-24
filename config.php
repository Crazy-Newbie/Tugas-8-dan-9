<?php


$servername = "localhost";
$database = "pwebsiswa";
$username = "root";
$password = '';

// Create connection

$db = mysqli_connect($servername, $username, $password, $database);
// Check connection

if ($db->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>