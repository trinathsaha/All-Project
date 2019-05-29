
<?php include('orderconnect.php'); ?>
<?php include('loginconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CFOS</title>
  <meta name="description" content="Online ordering system for our Canteen">
  <meta name="keywords" content="Foods Item, Foods Item, Foods Item, Foods Item, Foods Item, Foods Item, Foods Item,">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Delicious
    Theme URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            
            <a><?php
             echo $_SESSION['username'];
             
              ?> </a>
              <a href="#about">Profile Info</a>
              <a href="destroy.php">logout</a>
              <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#event">Event</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Contact</a>
       
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰ Menu</span>
        </div>
      </header>
      
      
        <div class="col-md-8 col-sm-8" style="background-color: white;">
          <h1 class="text-center text-success">Food Order page</h1>
        <br />
          <form action="order.php" method="post" role="form">
            <div id="sendmessage">Your request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
            <div class="form-group">
              <label for="menu">Food: </label>
            </div>
            <div class="col-md-5">
              
              <select name="menu" id="menu" required>
          <option value="10" selected>Jollof w/ chicken</option>
          <option value="20" >Plain Rice w/ chicken</option>
          <option value="30" >Salad w/ chicken</option>
          <option value="40" >Jollof w/ Fish</option>
          <option value="50" >Plain Rice w/ chicken</option>
          <option value="60" >Fufu w/ chicken</option>
          <option value="70" >Fufu w/ Goat Meat</option>
          <option value="80" >Fufu w/ Fish</option>
          <option value="90" >Chips w/ Chicken</option>
          <option value="100" >Chips w/ Fish</option>
          </select>
            </div>
            <div style="font-color: black;">
              <br />
              <p  id="price"></p>
            </div>
            
          </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="address" class="form-control"rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Address">
                <div class="validation"></div>
              </div>
            </div>

               <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="your credit card">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">


            </div><br />
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button name="order" class="contacts-btn">Order Food</button>
              
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <!-- <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">CFOS</h4>
            <address>XXX Dhanmondi Road<br>Dhaka, Dk XXXX</address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </footer> -->
  <!-- / footer -->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script>
    var drop = document.getElementById("menu");
    var price = document.getElementById("price");
    
    drop.onchange = function() {
      var food = this.options[this.selectedIndex].text;
      var show =  food + drop.value + "/-";
      price.innerHTML =  "<span style='color: red;'>" + show + "</span>";
    }
    
  </script>

</body>

</html>

