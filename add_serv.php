<?php
include 'db_connect.php';
$place=$_POST['place'];
$type_service=$_POST['type_service'];
$date=$_POST['date'];
$price=$_POST['price'];


$query="insert into add_serv (place,type_service,date,price) values('$place','$type_service','$date','$price' )";

$con-> query($query);
// $query1="insert into bonafide_sub(regno) values('$reg_no')";
// $con-> query($query1);
header("Location:add_service.php");
?>