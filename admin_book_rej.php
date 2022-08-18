<?php
	include 'db_connect.php';
	session_start();

	$email=$_GET['email'];
	 
  

$query="UPDATE confirm_book SET user_progress = '-1' WHERE email = '$email'";
$con-> query($query);
?>
 



 