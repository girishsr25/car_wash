<?php
include 'db_connect.php';
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      /* Extra style for the cancel button (red) */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }
      body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
      span.psw {
  float: right;
  padding-top: 16px;
}
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
input[type=number],input[type=text], input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=number]:focus,  input[type=text]:focus,input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

    </style>
</head>
<body>
    <h1>Admin Login</h1>
    <form action="admin_log_check.php" method="post">
        <div class="container">
           <label for="username"><b>email</b></label>
          <input type="text" placeholder="Enter Email" name="admin_email" id="admin_email" required>

      
          <label for="pwd"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" >
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember Me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
        <a href="startpage.php"><button type="button" class="cancelbtn">Cancel</button></a>
         
        </div>
      </form>
      
</body>
</html>