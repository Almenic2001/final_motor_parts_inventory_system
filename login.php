<?php
session_start();
if (isset($_SESSION["user"])){
	header("Location: index.php");

}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<style>
body{
	padding: 50px;
	background-color: lightpink;
}
.container{
	
	max-width: 400px;
    margin: 100px auto;
    background-color: lightgray;
    padding: 60px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
	
}
.form-group{
	margin-bottom: 30px;
}



</style>
<body>
	<div class = "container">
		<?php
		if (isset($_POST["login"])) {
			$email = $_POST["email"];
			$password = $_POST["password"];
			require_once "database.php";
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);
			$user = mysqli_fetch_array($result, MYSQLI_ASSOC);
			if($user){
				if (password_verify($password, $user["password"])){
					session_start();
					$_SESSION["user"] = "yes";
					header("Location: index.php");
					die();
				}else{
					echo "<div class ='alert alert-danger'> Password does not match</div>";
				}

			}else {
				echo "<div class ='alert alert-danger'> Email does not match</div>";
			}

		}



		?>
		<form action="login.php" method="post">
			<div class="form-group">
				<input type="email" placeholder="Enter Email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" placeholder="Enter Password" name="password" class="form-control">
			</div>
			<div class="form-btn">
				<input type="submit" value="Login" name="login" class="btn btn-primary">
			</div>
			<div><br>
			<div><p>Not Yet Registered? <a href="registration.php">Click Here.</a></p></div>
		</div>
	</div>

</body>
</html>