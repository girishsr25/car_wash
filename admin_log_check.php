<?php
include 'db_connect.php';

session_start();
    $admin_email=$_POST['admin_email'];
    $pwd=$_POST['password'];
          
    if($admin_email=="admin@admin.com" && $pwd=="admin") 
    {
        header("Location:admin_home.php"); 
    }
    else{
        session_destroy();
        header("Location:admin_login.php?msg=Invalid Credentials"); 
    }
?>