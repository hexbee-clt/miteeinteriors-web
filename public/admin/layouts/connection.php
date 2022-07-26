<?php
$host = "localhost"; 
$user = "root"; 
$password = "";
$dbname = "cremount_db"; 

// $host = "localhost"; 
// $user = "cremount"; 
// $password = "Passwordtharoola";
// $dbname = "cremountdb"; 



$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>