<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>
<!DOCTYPE html>
<html>
<style>
*{
	margin: : 0;
	padding: 0;
	font-family: Centurt Gothic;
}

header{
	height: 100vh;
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
  	background-attachment: fixed;
}

ul{
	float: right;
	list-style-type: none;
	margin-top:  25px;
}

ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: black;
	padding: 5px 20px;
	border : 1px solid  transparent;
	transition: 0.6s ease;
}

ul li a:hover{
	background-color: black;
	color: white;

}

</style>
<head>
	<title>Home</title>
	<link rel="stylesheet"  href="style.css">
</head>
<body>
	
		<header>
		<div class="main">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="welcome.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	
	</header>
</body>
</html>