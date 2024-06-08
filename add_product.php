<?php
include 'salesdatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $price = trim($_POST['price']);

    // Validate price to ensure it's a positive number
    if (!empty($name) && is_numeric($price) && $price > 0) {
        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO products (name, price) VALUES (?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }

        $bind = $stmt->bind_param("sd", $name, $price);
        if ($bind === false) {
            die('Bind param failed: ' . htmlspecialchars($stmt->error));
        }

        $exec = $stmt->execute();
        if ($exec) {
             echo "Product added successfully. Redirecting in 2 seconds...";
            sleep(2);
        } 
        if ($exec) {
            // Successful insertion, redirect to index.php
            header("Location: index.php?status=success");
            exit();
        }
        else {
            echo "Execute failed: " . htmlspecialchars($stmt->error);
        }

        $stmt->close();
    } else {
        echo "Invalid input. Please ensure all fields are filled correctly.";
    }
}

$conn->close();
?>
