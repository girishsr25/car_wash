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
h3
{
  display: block;
  font-size: 2em;
  margin-block-start: 0.67em;
  margin-block-end: 0.67em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
  font-weight: bold;
  text-align:center;
  margin-top:50px;
}
.adb{
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

.vb{
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
        .logoutbut 
        {
            max-width: 100;
            background-color: #ff0000;
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
            top: 4%;
            left: 95%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        </style>
</head>
<body>
    <h3>Welcome Admin</h3><br><br>
    <a href="add_service.php"><button class="adb">Add Service</button></a>
    <a href="view_bookings.php"><button class="vb">View Bookings</button></a>
    <a href="logout.php" id = "logout"><button type="button" class="logoutbut">LOGOUT</button></a>
</body>
</html>