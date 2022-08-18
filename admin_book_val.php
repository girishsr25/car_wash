<?php
	include 'db_connect.php';
   
	session_start();
    $email=$_GET['email'];
    

$query="UPDATE confirm_book SET user_progress = '2' WHERE email = '$email'" ;
$con-> query($query);
header("Location:view_bookings.php");

?>
 



 