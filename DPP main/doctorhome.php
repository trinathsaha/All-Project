<?php include ('template.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style3.css">

</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">My Query
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="addavailiability.php">Add Availiability</a>
      <a href="addqualification.php">Add qualification</a>
      <a href="#">Add Report</a>
      
    </div>
  </div> 

  <a href="#news">My Appointment</a>
  <a href="#contact">Search Patient</a>
  <a href="#contact">Add Description</a>
  <a href="#contact">Search Donor</a>
  <div class="dropdown">
    <button class="dropbtn">Doctor
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="">Profile Info</a>
      <a href="home.php">Logout</a>
      
    </div>
  </div> 
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>



  
