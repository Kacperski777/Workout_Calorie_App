<?php
 session_start();
?>





<?php

include('includes/dbh.inc.php');



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
<h1 class="user-font">USER PROFILE</h1>
</div>';


$id = $_SESSION["useruid"]; // get id


if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name']; //get value

    $edit = mysqli_query($conn,"UPDATE users SET usersName='$name' WHERE usersUid='$id'"); //update



    if($edit) //successful
    {

        mysqli_close($conn); // Close connection
        header("location: updated.php");
        exit;
    }
    else //error
    {
        echo mysqli_error($conn);
    }
}

if(isset($_POST['update2']))
{
    $email = $_POST['email'];

    $edit2 = mysqli_query($conn,"UPDATE users SET usersEmail='$email' WHERE usersUid='$id'");



    if($edit2)
    {

        mysqli_close($conn);
        header("location: updated.php");
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }
}


if(isset($_POST['update3']))
{
    $password = $_POST['password'];

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $edit3 = mysqli_query($conn,"UPDATE users SET usersPwd='$hashed' WHERE usersUid='$id'");



    if($edit3)
    {

        mysqli_close($conn);
        header("location: updated.php");
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }
}








echo
"
<div class='col-lg-5 user-info align-self-center'>
<p> Username: " .$_SESSION["useruid"] . "</p> <span> <br/></span>
<p> Full Name: " .$_SESSION["userName"] . "
<button id='update-1'class='  btn-danger' onclick='showInput(this.id)'>Update</button>
<div class='upd1 display-none'>
<form method='POST' autocomplete='off' class='user-form'>
<input type='text' pattern='[^\s][^0-9][A-zÀ-ž\s]*' title='Only Letters and Spaces allowed' name='name' placeholder='Enter New Name' Required>
<input type='submit' name='update' value='Submit'>
 <button class='btn-danger' id='hide-1' onclick='hide(this.id)' type='submit'>Cancel</button> </div> </p>  <span> <br/> </span>
</form>

<p> Email Address: " .$_SESSION["userEmail"] . "
<button id='update-2' class='  btn-danger' onclick='showInput(this.id)'>Update</button> </p>
<div class='upd2 display-none'>
<form method='POST' autocomplete='off' class='user-form'>
<input type='email' name='email' placeholder='Enter New Email Address' Required><input type='submit' name='update2' value='Submit'>
<button <button class='btn-danger' id='hide-2' onclick='hide(this.id)' type='submit'>Cancel</button></div>  <span> <br/> </span>
</form>
<p> Password: ******

<button id='update-3' class='  btn-danger' onclick='showInput(this.id)'>Update</button></p>
<div class=' upd3 display-none'>
<form method='POST' autocomplete='off' class='user-form'>
<input type='password' name='password' minlength='8' id='pass' placeholder='Enter New Password' Required><input type='submit' name='update3' value='Submit'>
<input type='checkbox' onclick='showPwd()'>
<button id='hide-3' class='btn-danger' onclick='hide(this.id)'type='submit'>Cancel</button></div> <span> <br/> </span></p> <span> <br/></span>
</form>
<a href='extra.php'><button class='  btn-primary'>Extras</button></a>
</br>
</br>
<a href='delete.php?id=". $_SESSION["useruid"] . "'><button class='  btn-danger'>Delete Account</button></a>


<script src='js/user.min.js'></script>
</div>";




echo'

<div class="col-lg-12 user-button">
<br/>
<a href="index.php">  <button class="btn  btn-success">  Back to Home </button></a>
</div>
';


}
else{
	include 'start.php';

}

?>
