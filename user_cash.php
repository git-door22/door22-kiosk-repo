<!DOCTYPE html>
<?php 
include('config/block_user.php');
date_default_timezone_set('Asia/Manila');
$today=date("M d, Y - h:i A"); 

?>
<!-- 
  Theme Name: Resto
  Theme URL: https://probootstrap.com/resto-free-restaurant-responsive-bootstrap-website-template
  Author: ProBootstrap.com
  Author URL: https://probootstrap.com
  License: Released for free under the Creative Commons Attribution 3.0 license (probootstrap.com/license)
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Door22 - Payment Kiosk</title>
    <meta name="description" content="Free Bootstrap Theme by ProBootstrap.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">


    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="user_index.php" title="Door22 - Payment Kiosk"><img src="img/logo.png"></a>
        </div>

        <div align="right">
          <br>
          <a href="logout.php"><input type="button" class="btn btn-danger btn-lg" value="Logout"></a>
        </div>
      </div>
    </nav>

    <?php
        $name=mysql_query("SELECT * FROM occupants WHERE oc_id='$_SESSION[oc_id]'");
        $userID=mysql_fetch_array($name);
    ?>

    <section class="flexslider" data-section="welcome">
      <ul class="slides">
        <li style="background-image: url(img/hero_bg_1.jpg)" class="overlay" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <!-- <h1 class="primary-heading">Welcome</h1> -->
                  <h3 class="secondary-heading">Door22 Residence</h3><br>
                  <p class="sub-heading">Hello <?php echo  $userID['name'] ?>! | <?php echo $today; ?></p>
                  <center>
                  <i><font color="#fff" size="4">Please fill in Envelope # and Amount.</font></i><br><br>
                    <form action="user_view_cash_details.php" method="POST" class="popup-form">


                    <table width="60%">
                    <tr>
                    <td><input type="hidden" class="form-control form-white" maxlength="12" name="cash" value='Cash'><br>
                    <input type="number" class="form-control form-white" maxlength="12" name="envelop_no" placeholder="Envelop #" ><br></td>
                    </tr>
                    <tr>
                    <td><input type="text" class="form-control form-white" maxlength="12" name="amount" placeholder="Amount" ><br></td>
                    </tr>
                    </table>

                    <table width="60%">
                      <tr>
                        <td align="left"><input type="submit" value=" Next " class="btn btn-success"><br><br></td>
                        <td align="right"><a href="user_index.php" class="btn btn-danger">Cancel</a><br><br></td>
                      </tr>
                    </table>
                    </form>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="copyright-text">&copy; 2017 <a href="#">Door22 Residence</a>. All Rights Reserved.</p>
          </div>
          <!-- <div class="col-md-4">
            <ul class="probootstrap-footer-social right">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </section>

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.min.js"></script>

  </body>
</html>
