<?php
$servername = "localhost";
$username = "root";
$password = "298869593";
$dbname = "ПСИП лабы";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
