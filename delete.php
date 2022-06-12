

<?php

require 'includes/dbh.inc.php';
require 'includes/functions.inc.php';
require 'user-profile.php';

if (isset($_SESSION["useruid"])){
$id =  $_SESSION["useruid"]  ;
$query = "DELETE FROM users WHERE usersUid =  '$id' ";
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
header("Location: deleted-account.php");
}
else{
alert("error");
}
?>
