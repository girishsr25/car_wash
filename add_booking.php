<?php 
include 'db_connect.php';
session_start();
$email= $_SESSION["email"];
  $a="select * from add_serv";
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
     table, th, td 
    {
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
   <form action="confirm_book.php" method="post"> 
    <label for="search" style="font-size:1.5em;">Search for places:</label>
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for places..">

  <table id="myTable">
  <tr>
      <th>Place</th>
      <th>Type of Service</th>
      <th>Date of Service</th>
      <th>price</th>
      <th colspan="2">Action</th>
    </tr>
    <?php 
    while($row = $returnvalue->fetch_assoc()){ ?>
    
    <tr>
    <td><?php echo $row['place']; ?> </td>
      <td><?php echo $row['type_service']; ?> </td>
      <td><?php echo $row['date']; ?> </td>
      <td><?php echo $row['price']; ?> </td>
      <td><a href="confirm_book.php"><button>Book</button> </a></td>
      
    </tr>
  <?php } ?> 
  </table> 
    </form>
  </div>  
  <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
  <!-- <script>
    function accept() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "http://localhost/Mini_Project/hod_action.php", true);
  xhttp.send();
}
    </script> -->
 </body>
 </html> 
