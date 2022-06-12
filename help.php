<?php
 session_start();
?>


<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.min.css'>";

if (isset($_SESSION["useruid"])){
  echo'<!doctype html>
  <html>

  <head>
  <meta charset="utf-8">
  <!-- Responsive website -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS, GoogleFonts and JavaScript -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet"  href="css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>Active+ | HELP</title>
  </head>
  <body>
  ';
include 'header.php';

  echo '<div class="faq">
  	<h1> Frequently Asked Question (FAQ) </h1>
  </div>
  <div id="accordion" class="faq">

    <h3 class="faq-title">Question 1 - How much is it to Sign-Up?</h3>
    <div>
      <p class="faq-paragraph">It costs absolutely nothing to sign up! This website is completely for free and has no premium features, maybe in the future ;)</p>
    </div>
    <h3 class="faq-title">Question 2 - How will this website help me achieve my goals?</h3>
    <div>
      <p class="faq-paragraph">This website has a bunch of cool features to help you! From tracking your workout and nutritions to fun challenges that are being updated every week! </p>
    </div>
    <h3 class="faq-title">Question 3 - Can I use this website on my smartphone or tablet?</h3>
    <div>
      <p class="faq-paragraph">Yes! This website supports all kinds of devices: </p>
      <ul class="faq-paragraph">
        <li>Tablets</li>
  			<br/>
        <li>Smartphones</li>
  					<br/>
        <li>Laptops</li>
      </ul>
    </div>
    <h3 class="faq-title">Question 4 - How do I delete my Account?</h3>
    <div>
      <p class="faq-paragraph">Navigate to your account, click "Edit Profile" and Click "Delete Account", if you can not find it email support at the bottom of this website </p>
    </div>
  	<h3 class="faq-title">Question 5 - How do I update my Username, Password or E-mail?</h3>
  	<div>
  		<p class="faq-paragraph">Navigate to your account, click "Edit Profile" and there you are allowed to change your password and E-mail, you are not allowed to change the username </p>
  	</div>
  	<h3 class="faq-title">Question 6 - What should I write in my notes?</h3>
  	<div>
  		<p class="faq-paragraph">Anything thats on your mind, it can be workout or food related but it can be a reminder for something else!</p>
  	</div>
  	<h3 class="faq-title">Question 7 - What are challenges?</h3>
  	<div>
  		<p class="faq-paragraph">If you complete a challenge you will get a trophy! if not, you will have a chance each week to earn 1 or more trophies!</p>
  	</div>
  </div>
  </div>



  <div class="email-help" >
  	<h1 class="email-title"> Need Help? Email us! </h1>';









  echo'
  <form class="form" action="includes/form.inc.php" method="post" >
    <div class="form-group">
      <label for="exampleInputName">Name:</label>
      <input type="text" name="name" class="form-control" id="InputName" aria-describedby="nameHelp" placeholder="Enter your Name:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail">Email:</label>
      <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Enter your Email:">
    </div>
    <div class="form-group">
      <label for="exampleInputProblem">Problem:</label>
      <textarea type="text-area" class="form-control" name="message" id="InputProblem" placeholder="Report a Problem:"></textarea>
    </div>
    <button type="submit" name="submit" value="submit"  class="btn btn-success">Submit</button>
  </form>
  ';
  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput2"){
      echo "<p style='text-align: center; font-size: 20px; background-color: red'>Fill in all the fields</p>";
    }
    else if($_GET["error"] == "problemLenght"){
      echo "<p style='text-align: center; font-size: 20px; background-color: red'>Not enough information in Problem Section</p>";
    }
}

echo'
  </div>













  <footer class="home-footer">
  <p class="pfooter"> Website Active+ made and maintained by Kacper Sliwinski</p>

  </footer>';


// JQUERY UI used to produce this accordion feature, referenced in the documentation
echo'
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
  	$( "#accordion" ).accordion({
  		collapsible: true,
  		active: false
  	});
  } );
  </script>
  </body>
  </html>
';



}
else{
	include 'start.php';

}


?>
