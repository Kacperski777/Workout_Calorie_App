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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet"  href="css/challenges.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>Active+ | CHALLENGES</title>
  </head>
  <body style="background-color: #33995f ">
  ';
include 'header.php';

  echo '<div class="container-fluid">
  <div class="row">

  <div class="col-lg-12 challenge-main-title">

  <p class="col-lg-12 challenge-main-title display-none no-challenges">
  	No More Challenges this Week, Come Back in few days! or Refresh and try again!
  </p>
  <img class="col-lg-12 challenge-title display-none no-challenges no-challenges-img" src="images/no-challenges.gif"</img>

  </div>

  <div class="col-xl-6 col-lg-12 challenge-section section-1">



  	<div class="outline">
  		<div class="container-fluid">

  		<div class="row">
  		<div class="col-lg-6 image no-padding">
      <object class="video-1" class="image" type="image/svg+xml" data="images/water-challenge.svg" style="width: 100%">Your browser does not support SVGs, alt="a woman drinking bottle of water"</object>
      <video class="video display-none" autoplay loop>
      <source src="images/water.mp4" type="video/mp4">
      Your browser does not support the video tag.
      </video>
  		</div>


  	<div class="col-lg-6 	col-md-12 challenges">
  <h1 class="challenge-title first-challenge">Drink 2L of Water everyday for a week!</h1>
  <div class="desc-1">
  <p class="challenge-difficulty">Difficulty: <span class="easy">Easy</span></p>
  <p class="challenge-description">This challenge is all about drinkin 2 Litres of Water everyday for at least a week!</p>
  <button id="one-done" onclick="Done(this.id)" class="btn1 btn   btn-success">Done?</button>
  <button id="one-forfeit" onclick="Forfeit(this.id)" class="btn1 btn  btn-success">Forfeit</button>
  	</div>
  </div>
  </div>
  	</div>

  </div>
  </div>


  <div class="col-xl-6 col-lg-12 challenge-section section-2">
  	<div class="outline">
  			<div class="container-fluid">
  				<div class="row">
  				<div class="col-lg-6 image no-padding">
          <object class="video-2" class="image" type="image/svg+xml" data="images/vegetable-challenge.svg" style="width: 100%">Your browser does not support SVGs, alt="man eating a salad at the office"</object>
          <video class="video2 display-none"  autoplay loop>
          <source src="images/vegetable-challenge.mp4" type="video/mp4">
          Your browser does not support the video tag.
          </video>


          </div>
  					<div class="col-lg-6 challenges">
  <h1 class="challenge-title second-challenge">Eat more Vegetables</h1>
  <div class="desc-2">
  <p class="challenge-difficulty">Difficulty: <span class="medium">Medium</span></p>
  <p class="challenge-description">This challenge is all about Eating at least one course of vegetables a day!</p>
  <button id="two-done" onclick="Done(this.id)" class="btn1 btn btn-success">Done?</button>
  <button id="two-forfeit"onclick="Forfeit(this.id)" class="btn1 btn  btn-success">Forfeit</button>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>







  <div class="col-xl-12 col-lg-12 challenge-section section-3">
  	<div class="outline">
  		<div class="container-fluid">
  			<div class="row">
  			<div class="col-lg-6 image no-padding">
        <object class="video-3 image" type="image/svg+xml" data="images/vegan-challenge.svg" style="width: 100%">Your browser does not support SVGs, alt="a whole bowl full of vegetables"</object>
        <video class="video3 display-none"  autoplay loop>
        <source src="images/vegan-challenge.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
  			</div>
  			<div class="col-lg-6 challenges">
  <h1 class="challenge-title-big third-challenge" >Try to become vegan for a week</h1>
  <div class="desc-3">
  <p class="challenge-difficulty-big">Difficulty: <span class="hard">Hard </span></p>
  <p class="challenge-description-big">This challenge is all about not eating meat for a whole week!</p>
  <button id="three-done" onclick="Done(this.id)" class="btn1 btn    btn-success">Done?</button>
  <button id="three-forfeit" onclick="Forfeit(this.id)" class="btn1 btn  btn-success">Forfeit</button>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>





  <div class="col-xl-6 col-lg-12 challenge-section section-4">
  		<div class="outline">
  			<div class="container-fluid">
  				<div class="row">
  				<div class="col-lg-6 image no-padding">
                <object class="video-4 image" type="image/svg+xml" data="images/protein-challenge.svg" style="width: 100%">Your browser does not support SVGs, alt="picutre showing eggs, samon, cheese and meat"</object>
                <video class="video4 display-none"  autoplay loop>
                <source src="images/protein-challenge.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>
  				</div>
  				<div class="col-lg-6 challenges">
  <h1 class="challenge-title fourth-challenge">Intake 40g of protein today!</h1>
  <div class="desc-4">
  <p class="challenge-difficulty">Difficulty: <span class="medium">Medium</span> </p>
  <p class="challenge-description">This challenge is all about eating something with high protein</p>
  <button id="four-done" onclick="Done(this.id)" class="btn1 btn btn-success">Done?</button>
  <button id="four-forfeit" onclick="Forfeit(this.id)" class="btn1 btn btn-success">Forfeit</button>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>


  <div  class="col-xl-6 col-lg-12 challenge-section section-5">
  <div class="outline">
  	<div class="container-fluid">
  		<div class="row">
  		<div class="col-lg-6 image no-padding">
        <object class="video-5 image" type="image/svg+xml" data="images/workout-challenge.svg" style="width: 100%">Your browser does not support SVGs,  alt="three woman working out at the same time"</object>
        <video class="video5 display-none"  autoplay loop>
        <source src="images/workout-challenge.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
  		</div>
  		<div class="col-lg-6 challenges">
  <h1 class="challenge-title fifth-challenge">Workout at least 4 times in a Week!</h1>
  <div class="desc-5">
  <p class="challenge-difficulty">Difficulty: <span class="medium">Medium</span></p>
  <p class="challenge-description">This challenge is all about working out 4 times a week! any exercises for at least an hour!</p>
  <button id="five-done" onclick="Done(this.id)" class="btn1   btn btn-success">Done?</button>
  <button id="five-forfeit" onclick="Forfeit(this.id)" class="btn1 btn btn-success">Forfeit</button>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  <div  class="col-lg-12 col-md-12 challenge-section section-6" >
  <div class="outline">
  	<div class="container-fluid">
  		<div class="row">
  		<div class="col-lg-6 image no-padding">
      <object class="video-6 image" type="image/svg+xml" data="images/run-challenge.svg" style="width: 100%">Your browser does not support SVGs,  alt="a black man running outside on a pavement"</object>
      <video class="video6 display-none"  autoplay loop>
      <source src="images/run-challenge.mp4" type="video/mp4">
      Your browser does not support the video tag.
      </video>
  		</div>
  		<div class="col-lg-6 challenges">
  <h1 class="challenge-title-big sixth-challenge">Run 10 miles</h1>
  <div class="desc-6">
  <p class="challenge-difficulty-big">Difficulty: <span class="very-hard">Very Hard</span></p>
  <p class="challenge-description-big">This challenge is all about running 10 miles in one day!</p>
  <button id="six-done" onclick="Done(this.id)" class="btn1   btn btn-success">Done?</button>
  <button id="six-forfeit" onclick="Forfeit(this.id)" class="btn1 btn btn-success">Forfeit</button>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

  <div  class="col-lg-12 col-md-12 challenge-section section-7">

  </div>
  </div>
  </div>











  <footer class="home-footer">
  <p class="pfooter"> Website Active+ made and maintained by Kacper Sliwinski</p>

  </footer>




  <script src="js/challenges.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  </body>
  </html>

';



}
else{
	include 'start.php';

}


?>
