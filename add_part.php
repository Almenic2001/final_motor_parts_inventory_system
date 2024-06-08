<?php
include 'connection.php';

$part_name = $_POST['part_name'];
$part_number = $_POST['part_number'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO parts (part_name, part_number, quantity) VALUES ('$part_name', '$part_number', $quantity)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
