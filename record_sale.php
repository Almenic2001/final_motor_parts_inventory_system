<?php
include 'salesdatabase.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input data
    $product_id = trim($_POST['product_id']);
    $quantity = trim($_POST['quantity']);

    // Validate inputs
    if (is_numeric($product_id) && is_numeric($quantity) && $product_id > 0 && $quantity > 0) {
        // Check if product exists in inventory with sufficient quantity
        $inventory_check = $conn->prepare("SELECT quantity FROM inventory WHERE product_id = ?");
        $inventory_check->bind_param("i", $product_id);
        $inventory_check->execute();
        $inventory_check->bind_result($available_quantity);
        $inventory_check->fetch();
        $inventory_check->close();
        
        echo "Available Quantity: " . $available_quantity . "<br>";

        if ($available_quantity >= $quantity) {
            // Record the sale
            $stmt = $conn->prepare("INSERT INTO sales (product_id, quantity) VALUES (?, ?)");
            if ($stmt === false) {
                die('Prepare failed: ' . htmlspecialchars($conn->error));
            }

            $bind = $stmt->bind_param("ii", $product_id, $quantity);
            if ($bind === false) {
                die('Bind param failed: ' . htmlspecialchars($stmt->error));
            }

            $exec = $stmt->execute();
            if ($exec) {
                // Update inventory
                $update_inventory = $conn->prepare("UPDATE inventory SET quantity = quantity - ? WHERE product_id = ?");
                if ($update_inventory === false) {
                    die('Prepare failed: ' . htmlspecialchars($conn->error));
                }

                $bind_update = $update_inventory->bind_param("ii", $quantity, $product_id);
                if ($bind_update === false) {
                    die('Bind param failed: ' . htmlspecialchars($update_inventory->error));
                }

                $exec_update = $update_inventory->execute();
                if ($exec_update) {
                    echo "Sale recorded successfully";
                } else {
                    echo "Execute failed: " . htmlspecialchars($update_inventory->error);
                }

                $update_inventory->close();
            } else {
                echo "Execute failed: " . htmlspecialchars($stmt->error);
            }

            $stmt->close();
        } else {
            echo "Insufficient inventory for the product.";
        }
    } else {
        echo "Invalid input. Please ensure all fields are filled correctly and are positive numbers.";
    }
}

$conn->close();
?>
