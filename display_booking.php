<?php
include 'db_connect.php';
session_start();
$email= $_SESSION["email"];
  $a="select * from confirm_book where email='$email'";
  $returnvalue=$con->query($a);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/homePage.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
      .bonafide{
        margin-top:40px;
      }
      .logoutbut
      {
        top: 4.8%;
      }
      .box
        {
            border: 0px solid rgb(146, 134, 134);
            box-shadow: -3px 0px 50px -18px;
               
        }
      h1
      {
        font-family:"Trebuchet MS", Helvetica, sans-serif;
        margin-top:40px;
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
            top: 4.8%;
            left: 95%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
        table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    align-items:center;
    text-align:center;
    padding: 15px;
}
form
{
  width: 95%;
}
      </style>
</head>
<body>
<br>
 <center> 
   <form action="#" method="post"> 
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Place</th>
      <th>Type of Service</th>
      <th>Date of Service</th>
      <th>price</th>
    </tr>
    <?php 
    while($row = $returnvalue->fetch_assoc()){ ?>
    
    <tr>
      <td><?php echo $row['name']; ?> </td>
      <td><?php echo $row['email']; ?> </td>
      <td><?php echo $row['place']; ?> </td>
      <td><?php echo $row['type_service']; ?> </td>
      <td><?php echo $row['date']; ?> </td>
      <td><?php echo $row['price']; ?> </td>
      
    </tr>
  <?php } ?> 
  </table> 
    </form>
        <?php 
        $query="select * from confirm_book where email='$email' ";
        $return=$con->query($query);
        $out=$return->fetch_assoc();
        if($out['user_progress']=='2'){
        ?>
        <center> <h3> Your Booking is Confirmed</h3></center>
        
        <?php } ?>
        <?php
         if($out['user_progress']=='1'){ ?>
          <center> <h3> Your Booking is Pending </h3></center>
       <?php } ?>

        <?php
         if($out['user_progress']=='-1'){ ?>
          <center> <h3>Your Booking is Cancelled, please do contact the administration </h3></center>
       <?php } ?>
</body>
</html>