<?php
$host = "127.0.0.1"; // localhost
$username = "root";
$password = "jasmine";
$dbname = "sample";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else {
    // echo "Connected successfully";
}
?>