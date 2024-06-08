<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>availablestock</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 10px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
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


video {
    border: 2px solid #333;
    border-radius: 10px;
    width: 100%;
    max-width: 500px;
    align-items: center;
}
form {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    width: 100%;
    max-width: 500px;
    padding: 20px;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}
input[type="text"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}
button {
    padding: 10px 20px;
    background: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
}
button:hover {
    background: #555;
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
    </header><br><br>
    <center>
<div class="container">
    <video id="preview"></video>
    <form action="save_barcode.php" method="post">
        <input type="text" id="barcode" name="barcode" readonly>
        <input type="text" id="product_name" name="product_name" placeholder="Product Name">
        <button type="submit">Save Barcode</button>
    </form>
</div></center>
    <script src="https://unpkg.com/@zxing/library@latest"></script>
    <script>
        const codeReader = new ZXing.BrowserBarcodeReader();
        const videoElement = document.getElementById('preview');
        const barcodeInput = document.getElementById('barcode');

        codeReader.decodeFromVideoDevice(null, videoElement, (result, err) => {
            if (result) {
                barcodeInput.value = result.text;
            }
            if (err && !(err instanceof ZXing.NotFoundException)) {
                console.error(err);
            }
        });
    </script>

</body>
</html>