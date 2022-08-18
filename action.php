<?php
    header('Access-Control-Allow-Origin: *');
	include 'db_connect.php';
	session_start();
	$email=$_SESSION['email'];
    $product_id=$_GET['product_id'];

    // $product_id=$_POST['product_id'];
    // echo $product_id;
	
    $query = "insert into services(email,product_id) values('$email','$product_id')";
    // $query="UPDATE users SET user_progress = '2' WHERE email = $email" ;
    $con-> query($query);
    header("Location:add_booking.php");
?>
 