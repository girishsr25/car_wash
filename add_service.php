<?php 
 include 'db_connect.php';
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>
  <style>
  .center 
  {
    display: block;
    margin: auto;
    float: left;
    width: 320px;
    height: 50px;
    
  }
.log
{
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
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.reg 
{
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
  top: 40%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
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

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
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



/* Full-width input fields */
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

/* Overwrite default styles of hr */
hr 
{
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn 
{
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover 
{
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
  </style>
    <form action="add_serv.php" method="POST">
        <div class="container">
        
          <h1>Add Services</h1>
          <!-- <p>Please fill in this form to create an account.</p> -->
          <hr>
          <label for="place"><b>Place</b></label>
          <input type="text" placeholder="Enter Place" name="place" id="place" required>
      
          <label for="type_service"><b>Types of Service</b></label><br>
            <select  id="type_service"name="type_service" style="width: 275px; height: 30px;">
                <option value="hidden" disabled selected hidden>Select an Service</option>
                <option value="Car Wash">Car Wash</option>
                <option value="Interior Wash">Interior Wash</optio9n>
                <option value="Premium Wash">Premium Wash</option>
                <option value="Bonnet Wash">Bonnet Wash</option>
                
            </select>
            <br><br>
            <label for="date"><b>Date of Service</b></label>
            <input type="date" placeholder="Enter Date" name="date" id="date" required>
            <br><br>
            <label for="price"><b>Enter Price</b></label>
            <input type="number" placeholder="Enter Price" name="price" id="price" required>


      
          <button type="submit" class="registerbtn">Add Booking</button>
        </div>
      </form>

</script>
</body>
</html>