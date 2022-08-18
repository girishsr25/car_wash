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
        .admin_log {
            max-width: 100;
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 28px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            /* margin: 4px 2px; */
            cursor: pointer;
            box-align: center;
            margin: 0;
            position: absolute;
            top: 45%;
            left: 50%;
            width:18%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

h1
{
  display: block;
  font-size: 2.5em;
  margin-block-start: 0.67em;
  margin-block-end: 0.67em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  font-weight: bold;
  text-align:center;
  margin-top:50px;
}

.user_log {
  max-width: 100;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 4px 2px; */
  cursor: pointer;
  box-align: center;
  margin: 0;
position: absolute;
top: 30%;
left: 50%;
width:18%;
-ms-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
}
body
{
    background-color: #bcd1d4;
}
    </style>
</head>
<body>
    <h1>Car Wash Service</h1>
    <a href="login.php"><button class="user_log">Customer login</button></a>

    <br><br>
   <a href="admin_login.php"> <button class="admin_log">Admin login</button></a>
</body>
</html>