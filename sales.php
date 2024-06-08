<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inventory</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(img/img9.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
   
}


header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    color: #fff;
    padding: 20px;
    box-shadow: 0 0 10x rgba(0, 0, 0, 0.8);
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
.container{
    
    max-width: 300px;
    margin: 50px auto;
    background-color: lightslategray;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 0 10x rgba(0, 0, 0, 0.8);
}
#record-sale{
    font-size: 20px;
}
#record-sale h1{
    text-align: center;
}



</style>
<body>
		<header>
	
        <div class="logo">
            <img src="img/img1.png" alt="Logo">
            <h1>Inventory Management System</h1>
            </div>
        <nav class=>
        	
            <ul>

                <li><a href="index.php">Home</a></li>
                <li><a href="developers.php">Web Developers</a><li>
                <li><a href="#">About</a></li>
                <li><a href="logout.php">Logout </a><li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="container">
      <section id="record-sale">
    <h1>Sales</h1><br>
    <form action="record_sale.php" method="post">
        <label for="sale-product-id">Product ID:</label>
        <input type="number" id="sale-product-id" name="product_id" required><br><br>
        <label for="sale-quantity">Quantity:</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" id="sale-quantity" name="quantity" required><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit">Record Sale</button>
    </form>
        </section>
    </div>
</body>
</html>