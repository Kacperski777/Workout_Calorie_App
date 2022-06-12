<?php
 session_start();
?>





<?php

include('includes/dbh.inc.php');
require 'includes/functions.inc.php';


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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <link rel="stylesheet"  href="css/main.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bebas Neue" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Active+ | USER PROFILE</title>
  </head>
  <body style="background-color: #33995f">

<div class="container-fluid">

<div class="row">

<div class="col-lg-12 user-header">
<h1 style="font-size:70px">EXTRA INFORMATION</h1>
</div>';

?>


<?php

echo
"
<div class='col-lg-7 user-info align-self-center'>";

if(isset($_POST['delete']))
{
  $id =  $_SESSION["userid"]  ;
  $query = mysqli_query($conn,  "DELETE FROM interest WHERE usersId =  '$id'");
  if($query)
  {
    mysqli_close($conn); // Close connection
    header("location: updated.php");
    exit;
}
else
{
  alert("error");
}
}


if(isset($_POST['update']))
{
    $sport = $_POST['sport'];
    $job = $_POST['job'];
    $workout = $_POST['workout'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $id = $_SESSION["userid"];
    $edit = mysqli_query($conn,"INSERT INTO interest (interestID, usersId, hobby, job, workout, weight, height) VALUES (rand(), '$id', '$sport', '$job', '$workout', '$weight', '$height')");



    if($edit)
    {

        mysqli_close($conn); // Close connection
        header("location: updated.php");
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }
}






$id = $_SESSION["userid"];

$sql = "SELECT * FROM interest WHERE usersId='$id'";
$results = $conn->query($sql);

if($results->num_rows){
  while($row = $results->fetch_object()){
    echo '<p>Favourite Sport: ' . $row->hobby . '</p><br/>';
    echo '<p>Your Job Title: ' . $row->job . '</p><br/>';
    echo '<p>Best Workout: ' . $row->workout . '</p><br/>';
    echo '<p>Your Current Weight: ' . $row->weight . '</p><br/>';
    echo '<p>Your Height: ' . $row->height . '</p><br/>';
    echo '
    <form method="POST" class="user-form">


      <input class=" btn-danger" type="submit" name="delete" value="Delete">
      </form>';
  }
}
else{
  echo '<p> Update your extra information to see results </p>
  <div class="col-lg-12">
  <form method="POST" class="user-form">
  Favourite Sport: </br> <input name="sport" type="text" pattern="[^\s][^0-9][A-zÀ-ž\s]*" title="only letters and spaces allowed" required>
  <br>
  Job Title: </br><input name="job" type="text" pattern="[^\s][^0-9][A-zÀ-ž\s]*" title="only letters and spaces allowed" required>
  <br>
  Best Workout: </br><input name="workout" type="text" pattern="[^\s][^0-9][A-zÀ-ž\s]*" title="only letters and spaces allowed" required>
  <br>
  Current Weight: </br> <input name="weight" type="text"   required>
  <br>
  Height: <br/><input name="height" type="text"   required>
  <br>
  <input class="btn btn-success" type="submit" name="update" value="Submit">


  </form>
  </div>








  ';

}





echo'
<script src="js/user.min.js"></script>
</div>"';



echo'

<div class="col-lg-12 user-button">

<br/>
<a href="user-profile.php">  <button class="btn  btn-success">  Back </button></a>
</div>
';


}
else{
	include 'start.php';

}

?>
