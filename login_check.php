<?php
include 'db_connect.php';

session_start();
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
     
    $query="select * from users where   email='$email' and  pwd='$pwd' ";
    $result=$con-> query($query);
     
    if($row = $result->fetch_assoc()) {
        $_SESSION["email"] = $row["email"];
        header("Location:index.php"); 
    }

    else{
        session_destroy();
        header("Location:login.php?msg=Invalid Credentials"); 
    }
?>