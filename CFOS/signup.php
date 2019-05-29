
<?php include ('loginconnect.php'); ?>
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


  <!--banner-->
  <body>
    <section id="banner">
    <div class="bg-color">
          
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            
            <a href="signup.php">Signup</a>
             <a href="login.php">Login</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰ Menu</span>
        </div>
    
    
     <!-- <div class="container" style="margin-top: 5%;"> -->
    <div class="row" >
      <div class="col-sm-4" > </div>
      <div class="col-md-4" style="background-color: white">
        <section >
        <h1 class="text-center text-success">Register page</h1>
        <br />
        
            <section >
              <form action="signup.php" method="post" role="form" class="contactform">
                <?php include ('errors.php')?>
                
                    <div id="errormessage"></div>
                <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="User name">User name</label>
                  <input type="text" name="username" class="form-control" data-rule="required" placeholder="username" data-msg="This field is required" id="username" value -"<?php echo $username; ?>">
                   <div class="validation"></div>
                </div>
                </div>

                <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="email address" data-rule="required" data-msg="This field is required" value -"<?php echo $email; ?>">
                   <div class="validation"></div>
                </div>
                </div>

                <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" name="password" class="form-control" id="pwd" data-rule="required" data-msg="This field is required" value -"<?php echo $password; ?>">
                   <div class="validation"></div>
                </div>
                </div>

                <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="pwd">Confirm Password:</label>
                  <input type="password" class="form-control" id="pwd" data-rule="required" data-msg="This field is required">
                    <div class="validation"></div>
                </div>
                </div>

                 <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="Number">Contact Number</label>
                  <input type="text" name="contact_number" placeholder="Contact Number" class="form-control" id="Number" data-rule="minlen" data-msg="This field is required">
                    <div class="validation"></div>
                </div>
                </div>

                 <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="Address">Address</label>
                  <input type="text" name="address" placeholder="Address" class="form-control" id="Address" data-rule="required" data-msg="This field is required">
                    <div class="validation"></div>
                </div>
                </div>

                 <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="Age">Age</label>
                  <input type="Number" name="age" placeholder="Age" class="form-control" id="age" data-rule="required" data-msg="This field is required">
                    <div class="validation"></div>
                </div>
                </div>



                <button  type="submit" name="signup" class="contacts-btn" > Sign Up </button>
                

                <button  class=" pull-right btn-link"><a href="">Forget password</a></button>

              </form>

              <br />

              <a href="login.php" class="pull-right btn btn-block btn-success"> Already Registered? </a>

              <br />
              <br />
          </section>
                </section>
  </div>
  

<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
      