<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/form.min.css">
</head>



<body>




</div>

<section>
<div class="container">
<div class="form row login-form">
<div class="col-lg-12 form2">
<h2 class="signup-title"> LOGIN </h2>
<form class="" action="includes/login.inc.php" method="post">
<input class="input" type="text" name="uid" placeholder="Username/E-mail...">
</br>
<input class="input" type="password" name="pwd" placeholder="Password...">
</br>
<button class="input submit" type="submit" name="submit">LOGIN</button>
</br>
<a  href="signup.php">Create an account</a>
<br/>
<a class="home2 col-1" style=" text-decoration: none;" href="index.php">Back</a>
</div>
</div>
</div>
</section>




<?php

// Shows error or log in

echo "<link rel='stylesheet' type='text/css' href='css/form.css'>";
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<div class='error'>Fill in all the fields</div>";
		}
		else if($_GET["error"] == "wronglogin"){
			echo "<p class='error'>Incorrect login information</p>";
		}
	}

?>


</body>













</html>
