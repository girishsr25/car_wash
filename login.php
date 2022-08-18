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
</head>
<body>
  <style>
  .cancelbtn 
  {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
body 
{
font-family: Arial, Helvetica, sans-serif;
}

*{
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
input[type=number],
input[type=text], 
input[type=text], 
input[type=password] 
{
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background: #f1f1f1;
}

input[type=number]:focus,  
input[type=text]:focus,
input[type=text]:focus, 
input[type=password]:focus 
{
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
  <h1>Login</h1>
    <form action="login_check.php" method="post">
        <div class="container">
           <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>

      
          <label for="pwd"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="pwd" required>
      
          <button type="submit">Login</button>
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember Me
          </label>
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <a href="startpage.php"><button type="button" class="cancelbtn">Cancel</button></a>
          <span class="psw">Didn't have an Account <a href="signup.php">Sign Up</a></span>
        </div>
      </form>
</body>
</html>