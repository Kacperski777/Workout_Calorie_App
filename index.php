<?php
 session_start();
?>




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/main.css">

<title> ACTIVE+ </title>
<link rel="shortcut icon" type="image/jpg" href="images/favicon.ico">

</head>




<body>





<nav>
<div>

<?php

echo "<link rel='stylesheet' type='text/css' href='css/style.css'>";

if (isset($_SESSION["useruid"])){
  include 'home.php';


}
else{
	include 'start.php';

}



?>

</div>
</nav>


</body>













</html>
