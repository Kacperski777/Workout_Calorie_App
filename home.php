<?php

echo '
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<!-- Responsive website -->
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS, GoogleFonts and JavaScript -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<link rel="stylesheet"  href="css/main.min.css">
<link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<title> Active+ | HOME </title>
</head>

<body>

';

include 'header.php';



echo'



  <!-- Backgroung Image Slides -->


     <!-- Header  -->



<div class="container-fluid">

<div class="row">
   <!-- Content / Information -->
<div class="content-1 col-xl-4" >
    <p class="contentP">
      <object class="imageContent" type="image/svg+xml" data="images/content.svg" style="width: 100%">Your browser does not support SVGs,  alt="woman-exercising1"</object>
        HELLO TO ACTIVE+, THIS IS A WEBSITE FOR YOU! A PERSON WHO IS LOOKING TO CHANGE THIER LIFE, FOR MORE HIT ABOUT BUTTON!</p>
</div>

<div class="content-2 col-xl-4">
<a href="user-profile.php"  style="color: white">
    <p class="contentP2">
          <object class="imageContent" type="image/svg+xml" data="images/content2.svg" style="width: 100%">Your browser does not support SVGs,  alt="woman-exercising2"</object>

        User Profile</a></p>

</div>

<div class="content-3 col-xl-4">
    <p class="contentP3">
      <object class="imageContent" type="image/svg+xml" data="images/content3.svg" style="width: 100%">Your browser does not support SVGs,  alt="man-exercising3"</object>
        SHARE YOUR JOURNEY WITH US, YOUR INSPIRATION CAN INSPIRE OTHER PEOPLE! NEVER GIVE UP ON YOUR DREAMS!</p>
</div>

<!-- Footer -->
<footer>
<a href="includes/logout.inc.php" class="btn-block" ><button class="btn btnmain btn-success"> Logout</button></a>
</footer>


</div>








</body>





</html>






';





 ?>
