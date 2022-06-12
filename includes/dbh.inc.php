<?php
// Connection to the database
$serverName = "172.16.11.22:3306";
$dBUName = "slik1_18";
$dBPName = "LoginRegisterDatabase";
$dBName = "slik1_18_login";

$conn = mysqli_connect($serverName,$dBUName,$dBPName,$dBName);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error);
}
