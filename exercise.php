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


  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <link rel="stylesheet"  href="css/main.min.css">
  <link rel="stylesheet"  href="css/notes.min.css">
  <title>Active+ | EXERCISE</title>
  </head>
  <body>
  ';
include 'header.php';

  echo '<div class="container-fluid">

  <div  class="row">





  <div class="storage col-lg-12">

  <table class="note-table col-lg-12 table-success ">
    <tr class="test" >
      <td class="title-note">Time of Workout</td>
      <td class="description-note">Type of Workout</td>
      <td class="calories-note">Calories Burnt</td>
    </tr>
  </table>





  </div>

  <div class="col-xl-12 input-notes">
  <form action=""  class="adde">
  <input   type="text" id="input-time" placeholder="Time of Workout" autocomplete="off" >
  <br/>
  <input  type="text" id="input-type" placeholder="Type of Workout" autocomplete="off" >
  <br/>
  <input   type="text" id="input-calories" placeholder="Calories Burnt" autocomplete="off" >
  <input class="submit-button" type="submit">
  </form>
  </div>



  </div>
  </div>


  <footer class="home-footer">
  <p class="pfooter"> Website Active+ made and maintained by Kacper Sliwinski</p>

  </footer>




  <script src="js/exercise.min.js"></script>


  </body>
  </html>
';



}
else{
	include 'start.php';

}


?>
