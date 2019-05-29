
<?php include('loginconnect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login</title>
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
    <div class="container">
    
      <div class="col-md-4" style="background-color: white; position: center;">
        <section >
        <h1 class="text-center text-success">Admin Login page</h1>
        <br />
          <?php include ('errors.php')?>
          
            <section >
              <form action="admin.php" method="POST" role="form" class="contactform">
                

                <div id="errormessage"></div>
               <div col-md-6 col-sm-6 contact-form pad-form>
                
                <div class="form-group">
                  <label for="User name">User name</label>
                  <input type="text" name="username" class="form-control label-floating is-empty" data-rule="required" data-msg="Username is required" id="email" >
                  <div class="validation"></div>
                </div>
                  </div>

               
                <div col-md-6 col-sm-6 contact-form pad-form>
                <div class="form-group">
                  <label for="pwd">Password:</label>

                  <input type="password"  name="password" class="form-control label-floating is-empty" id="pwd" data-rule="required" data-msg="Password is required">

                  <div class="validation"></div>
                </div>
                </div>

                <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">            
                 <button  class="contacts-btn" type="submit" name="adminlogin" >Admin Login </button>

                </div>
              </div>

              </form>

              <br />
                </section>
                 </div>
               </section>
             </div>
           
  

<script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</body>
</html>
      