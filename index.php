<?php
session_start();
if (!isset($_SESSION["user"])){
	header("Location: login.php");

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title></title>
</head>

<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: lightsteelblue;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    padding: 20px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;

}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
     border: 1px solid #ddd;
        border-radius: 10px;
        padding: 20px;

}
.logo h1{
	font-size: 30px;
	padding-left: 20px;

}

nav ul li a:hover {
    text-decoration: underline;
}

.logo {
    display: flex;
    align-items: center;

}

.logo img {
    height: 40px;
    margin-right: 10px;
    border-radius: 50%;
}

.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.element {
    background-color: #f4f4f4;
    border-radius: 10px;
    padding: 20px;
    margin: 10px;
    width: 300px;
    height: 350px;
    text-align: center;
    font-size: 20px;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
}

.details-btn {
    display: inline-block;
    background-color: #333;
    color: #fff;
    padding: 8px 16px;
    border-radius: 5px;
    text-decoration: none;
    margin-top: 10px;
    transition: background-color 0.3s;
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
}

.details-btn:hover {
    background-color: #555;

}
.element img {
	
	
	height: 200px;
    width: 250px; 
    border-radius: 10px 10px 0 0; 
    box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
}

.element h2 {
    margin-top: 10px;
    font-size: 20px;
}
</style>
<body>

	<header>
	
        <div class="logo">
            <img src="img/img1.png" alt="Logo">
            <h1>Inventory Management System</h1>
            </div>
        <nav class="box">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Web Developers</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="element">
            	<img src="img/img2.jpg" alt="Available Stock">
                <h2>Available Stock</h2>
                <a href="#" class="details-btn">View Details</a>
            </div>
            <div class="element">
            	<img src="img/img3.jpg" alt="Inventory">
                <h2>Inventory</h2>
                <a href="#" class="details-btn">View Details</a>
            </div>
            <div class="element">
            	<img src="img/img4.jpg" alt="Automated Stock Alert">
                <h2>Automated Stock Alert</h2>
                <a href="#" class="details-btn">View Details</a>
            </div>
            <div class="element">
            	<img src="img/img5.jpeg" alt="Sales">
                <h2>Sales</h2>
                <a href="#" class="details-btn">View Details</a>
            </div>
            <div class="element">
            	<img src="img/img6.png" alt="Barcode Scanner">
                <h2>Barcode Scanner</h2>
                <a href="#" class="details-btn">View Details</a>
            </div>
            <div class="element">
            	<img src="img/img8.webp" alt="Out of Stock Items">
                <h2>Out of Stock Items</h2>
                <a href="#" class="details-btn">View Details</a>
            </div>
        </div>
    </main>
</body>
	



</body>
</html>