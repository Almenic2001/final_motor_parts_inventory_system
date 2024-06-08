<?php
include 'salesdatabase.php';

$sql = "SELECT name, price, stock, threshold FROM products";
$result = $conn->query($sql);

if ($result === false) {
    die('Error: ' . htmlspecialchars($conn->error));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Levels</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .product {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .low-stock {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Stock Levels</h1>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<p>Product: " . htmlspecialchars($row["name"]) . " - Price: $" . htmlspecialchars($row["price"]) . " - Stock: " . htmlspecialchars($row["stock"]);
                if ($row["stock"] <= $row["threshold"]) {
                    echo " - <span class='low-stock'>Alert: Low Stock!</span>";
                }
                echo "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Levels</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .product {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .low-stock {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Stock Levels</h1>


        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<p>Product: " . htmlspecialchars($row["name"]) . " - Price: $" . htmlspecialchars($row["price"]) . " - Stock: " . htmlspecialchars($row["stock"]);
                if ($row["stock"] <= $row["threshold"]) {
                    echo " - <span class='low-stock'>Alert: Low Stock!</span>";
                }
                echo "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found.</p>";
        }
       ?>
    </div>
</body>
</html>

