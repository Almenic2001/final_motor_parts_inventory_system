<?php
$servername = "localhost";
$username = "root"; // Use your MySQL username
$password = ""; // Use your MySQL password
$dbname = "barcode_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $barcode = $_POST['barcode'];
    $product_name = $_POST['product_name'];

    $sql = "INSERT INTO barcodes (barcode, product_name) VALUES ('$barcode', '$product_name')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>