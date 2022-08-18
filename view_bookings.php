<?php 
include 'db_connect.php';
session_start();
  $a="select * from confirm_book where user_progress='0'";
  $returnvalue=$con->query($a);?>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <title>Document</title>
   <style>
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
   <form action="admin_book_val.php" method="post"> 
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Place</th>
      <th>Type of Service</th>
      <th>Date of Service</th>
      <th>price</th>
      <th colspan="2">Action</th>
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
      <td><a href="admin_book_val.php?email=<?= $row['email'] ?>"> <button  type="button" class="btn btn-success" onclick="accept()">Accept</button> </a></td>
      <td> <a href="admin_book_rej.php?email=<?= $row['email'] ?>"><button type="button" class="btn btn-danger">Reject</button></a> </td>
    </tr>
  <?php } ?> 
  </table> 
    </form>
  </div>  
  <script>
    function accept() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/GP/admin_book_val.php", true);
  xhttp.send();
}
    </script>
 </body>
 </html> 