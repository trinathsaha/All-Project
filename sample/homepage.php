<!DOCTYPE html>
<html lang = "en">
<head>
	<title> Garments Management System </title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
			<h1> Garments Management System </h1>
			<div class="navbar">
				<ul>
				<li> <a href="homepage.php"> HOME </a> </li>
				<li> <a href="#"> About </a> </li>
				<li> <a href="login.php"> Login</a> </li>
				<li> <a href="loginpanel1.php"> Sign Up </a> </li>
				<li> <a href="#"> Contact </a> </li>
				<br>
				<li>
			  <input type="text" style="margin:auto;max-width:400px" placeholder="Search.." name="search2">
			  <button type="submit"><i class="fa fa-search"></i></button>
			  </li>
			
			</ul>
			</div>
					
			<marquee> Get upto 20% discount for in according to bengali new year </marquee> 
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <style>
	  .carousel-inner > .item > img,
	  .carousel-inner > .item > a > img {
		  width: 100%;
		  height: 280px;
		  margin: auto;
	  }
	  </style>
  

	<div class="container">
	  <br>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="Garment Management System.jpg" alt="Garments" width="460" height="345">
        <div class="carousel-caption">
          <h3>Garments</h3>
          <p>All kind of Garments product are available here </p>
        </div>
      </div>

      <div class="item">
        <img src="garmenting.jpg" alt="Garments" width="460" height="345">
        <div class="carousel-caption">
          <h3>Garments</h3>
          <p>All kind of Garments product are available here</p>
        </div>
      </div>
    
      <div class="item">
        <img src="porque-abrir-uma-loja-de-roupa.jpg" alt="Garments" width="460" height="345">
        <div class="carousel-caption">
          <h3>Garments</h3>
          <p>All kind of Garments product are available here</p>
        </div>
      </div>

      <div class="item">
        <img src="mens-garments3.jpg" alt="Garments" width="460" height="345">
        <div class="carousel-caption">
          <h3>Garments</h3>
          <p>All kind of Garments product are available here</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

			
			</br>
			</br>
			<label> Product Type </label>
			<select>
			<option> T-shirt </option>
			<option> Shirt </option>
			<option> Jeans </option>
			<option> T-shirt </option>
			</select> 
			
			
		</br>
		

	<?php 
		$db = "";
		$db = mysqli_connect('localhost', 'root', '', 'garmentsmanagement');
		$query = "SELECT * FROM productimage";
		$result = mysqli_query($db,$query);

		while ($row = mysqli_fetch_array($result)) {
			echo "<div id = 'img div' >";
			
			echo "<img src='".$row['image']."'/>";

			
			
			echo "</div>";
		}




	?>
			
			
		
</body>
</html>
