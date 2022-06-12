<?php

// Checks for errors or creates a user


if(isset($_POST["submit"])){

  $name = $_POST['name'];
    $email = $_POST['email'];
  $problem = $_POST['message'];

	require_once('dbh.inc.php');
	require_once('functions.inc.php');



	if(emptyInputForm($name,$email,$problem) !== false){
		header("location: ../help.php?error=emptyinput2");
		exit();
	}
  if(problemCount($problem) !== false) {
  		header("location: ../help.php?error=problemLenght");
  		exit();
  	}






else {
  $to = "activePlus@gmail.com";
  $subject = "Form submission";


  $headers = "From:" . $from;
  mail($to,$subject,$message,$headers);
    header("location: ../problem.php");
	exit();

}
}
