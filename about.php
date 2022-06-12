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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet"  href="css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <title>Active+ | ABOUT</title>
  </head>
  <body>
';

include 'header.php';

  echo '<div class="aboutMe" >
  	<h1 class="title-about" data-aos="fade-up"  data-aos-duration="1000" data-aos-delay="150"> About Me</h1>
      <object class="profile-picture" type="image/svg+xml" data="images/aboutME.svg"  data-aos="fade-up"  data-aos-duration="3000" data-aos-delay="400">Your browser does not support SVGs, alt="a picture of the website creator"</object>
  <div>
  <p class="about-me" data-aos="fade-up"  data-aos-duration="3000" data-aos-delay="600">Hello, my name is Kacper and I have created this website for you guys! I am currently studying at University of Worcester and this is my Assignment Project! Hope you like it!
  <br/>
  </br>
  This is a fully functional Web Application created by using HTML, CSS, Vanilla JS, JQuery, Chart JS, AOS and PHP</p>
  </div>
  </div>
  </div>



  <div class="container-fluid" >
  <div class="row followUs">
  <div class="col-lg-6">
  <p class="follow-paragraph" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="300">
  	Any extra info and future plans can be followed on my social media:
  		<br> <i class="fab fa-facebook-square"></i> Facebook - ActivePlus
      <br> <i class="fab fa-instagram"></i> Instagram - ActivePlus
      <br> <i class="fab fa-twitter"></i> Twitter - ActivePlus </p>
  </div>
  <div class="col-lg-6">
    <object class="follow-picture float-xl-right" type="image/svg+xml" data="images/follow.svg"  data-aos="fade-left" data-aos-duration="3000" data-aos-delay="600">Your browser does not support SVGs, alt="follow me"</object>
  </div>
  </div>
  </div>






  <div class="container-fluid">
  <div class="row what-section">
  	<div class="col-lg-6">
      <object class="what-picture float-xl-left" type="image/svg+xml" data="images/WHAT.svg"  data-aos="fade-down" data-aos-duration="3000" data-aos-delay="300">Your browser does not support SVGs, alt="a woman running on a treadmill"</object>
  	</div>
  <div class=" col-lg-6">
  	<h1  class="title-what" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="600"> What is this Website?</h1>
  <p class="what-paragraph" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="900">
  	I would like to introduce you guys to this brand new website tracking workout and nutrition intake, compete in weekly challenges and become who you want to become with this little help!</p>
  </div>

  </div>
  </div>





  <div>
  <div class="thanks-section">
  <object class="thanks-picture" type="image/svg+xml" data="images/THANKS.svg" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="300">Your browser does not support SVGs, alt="thank you"</object>
  <p class="thanks-paragraph" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="600">
  	I would like to thank everyone using this website, (still in development): <br/>  - Kacper Sliwinski
      <br> - Active+ </p>

  </div>
  </div>





  <footer class="home-footer">
  <p class="pfooter"> Website Active+ made and maintained by Kacper Sliwinski</p>

  </footer>




  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
  </body>
  </html>


';



}
else{
	include 'start.php';

}


?>
