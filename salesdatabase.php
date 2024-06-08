<?php
$hostName = "localhost";
$dbUser = "root"; // Update as per your MySQL credentials
$dbPassword = "";
$dbName = "sales_inventory";

$conn = new mysqli($hostName , $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>