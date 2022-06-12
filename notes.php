<?php
 session_start();
?>

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.min.css'>";

if (isset($_SESSION["useruid"])){
  echo '
  <!doctype html>
  <html>

  <head>
  <meta charset="utf-8">
  <!-- Responsive website -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS, GoogleFonts and JavaScript -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet"  href="css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <title> Active+ | NOTES</title>
  </head>
  <body style="background-color: #33995f;">







  ';

include 'header.php';


  echo '
  <div class="container-fluid">

  <div class="row">
  <div class="note-button col-lg-12">
  <button class="add btn " onclick="overlayOn()">Click to add Note </button>
  </div>

  <div class="col-lg-12 note-form ">
    <form class="inputs" onsubmit="return false"   >
    <input class="test" type="text" id="input-title" placeholder="Title" >
    <br/>
    <input class="test" type="text" id="input-description" placeholder="Write a note...">
    <br/>
    <button type="submit" class="btn btn-overlay" onclick="Submit()">Submit</button>
    <button  class="btn btn-overlay"onclick="overlayOff()">Cancel</button>
    </form>
  </div>

  <div  class="show-note">

  </div>

  </div>
  </div>



  <footer class="home-footer">
  <p class="pfooter"> Website Active+ made and maintained by Kacper Sliwinski</p>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
  <script src="js/notes.min.js" charset="utf-8"></script>


  </body>
  </html>



  ';


}
else{
	include 'start.php';

}
