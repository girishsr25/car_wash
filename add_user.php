<?php
include 'db_connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];


$query="insert into users (name,email,pwd) values('$name','$email','$pwd' )";

$con-> query($query);
// $query1="insert into bonafide_sub(regno) values('$reg_no')";
// $con-> query($query1);
header("Location:login.php");
?>