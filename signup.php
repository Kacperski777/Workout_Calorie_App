<!DOCTYPE html>
<html>
<head>
	<title> Sing Up </title>
	  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/form.min.css">


</head>




<body>




</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<section>

<div class="container">
	<div class="form row">
<div class="col-lg-12 form2 ">
<h2 class="signup-title"> SIGN UP </h2>
<form id="form" action="includes/signup.inc.php" method="post">
<input  class="input" type="text" name="name" placeholder="Full Name...">
</br>
<input class="input " type="text" name="email" placeholder="E-mail...">
</br>
<input  class="input "type="text" name="uid" placeholder="Username...">
</br>
<input  class="input "type="password" minlength='8' name="pwd" placeholder="Password...">
</br>
<input  class="input "type="password" minlength='8' name="pwdrepeat" placeholder="Repeat Password...">
<br/>
<br/>
<div style="display: inline-block"  name="captcha" class="g-recaptcha" data-sitekey="6LdH_74aAAAAAAU_b0fXfypzlt0vMDv0AOyoXCe_"></div>
		 <br/>


<button class="input submit" type="submit" name="submit">SIGN UP </button>
</form>
<a class="link" href="login.php">Already registered? Login!</a>
</br>
<a class="home2 col-1" style=" text-decoration: none;" href="index.php">Back</a>
	</div>
</div>
</div>
</section>





<?php

// Displays error or signs up


echo "<link rel='stylesheet' type='text/css' href='css/form.css'>";

	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p class= 'error'>Fill in all the fields</p>";
		}
		else if($_GET["error"] == "invaliduid"){
			echo "<p class= 'error'>Choose a proper username</p>";
		}
		else if($_GET["error"] == "invalidemail"){
			echo "<p class= 'error'>Choose a proper email</p>";
		}
		else if($_GET["error"] == "passwordsdontmatch"){
			echo "<p class= 'error'>Passwords do not match</p>";
		}
		else if($_GET["error"] == "stmtfailed"){
			echo "<p class= 'error'>Something went wrong</p>";
		}
		else if($_GET["error"] == "usernametaken"){
			echo "<p class= 'error'>Choose another username</p>";
		}
		else if($_GET["error"] == "emptyCaptcha"){
			echo "<p class='error'>Complete reCaptcha Verification</p>";
		}
		else if($_GET["error"] == "none"){
			echo "<p class='success'>You have signed up!</p>";
		}
	}


?>



</body>













</html>
