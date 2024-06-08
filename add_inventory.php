<?php
include 'salesdatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $product_id = trim($_POST['product_id']);
    $quantity = trim($_POST['quantity']);
    $threshold = trim($_POST['threshold']);

    // Validate inputs
    if (is_numeric($product_id) && is_numeric($quantity) && is_numeric($threshold) && $product_id > 0 && $quantity > 0 && $threshold > 0) {
        // Check if product exists
        $product_check = $conn->prepare("SELECT product_id FROM products WHERE product_id = ?");
        $product_check->bind_param("i", $product_id);
        $product_check->execute();
        $product_check->store_result();
        
        if ($product_check->num_rows > 0) {
            $product_check->close();

            // Prepare and bind the SQL statement
            $stmt = $conn->prepare("INSERT INTO inventory (product_id, quantity, threshold) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity = quantity + VALUES(quantity)");
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }

            $bind = $stmt->bind_param("iii", $product_id, $quantity, $threshold);
            if ($bind === false) {
                die('Bind param failed: ' . htmlspecialchars($stmt->error));
            }

            $exec = $stmt->execute();
            if ($exec) {
                echo "Inventory added and updated successfully";
            } else {
                echo "Execute failed: " . htmlspecialchars($stmt->error);
            }

            $stmt->close();
        } else {
            echo "Product ID does not exist.";
        }
    } else {
        echo "Invalid input. Please ensure all fields are filled correctly and are positive numbers.";
    }
}

$conn->close();
?>
