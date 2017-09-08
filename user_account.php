<!DOCTYPE html>
<?php 
include('config/block_user.php');
date_default_timezone_set('Asia/Manila');
$today=date("M d, Y - h:i A"); 
$today_day=date("M d, Y"); 
$today_time=date("h:i A"); 
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
                   <i><font color="#fff" size="4">List of all payments.</font></i><br><br>
                    <table id="basicTable" class="table responsive">
                      <thead class="">
                          <tr>
                            <th><font size="-6" color="#fff"><center>Tracking #</center></font></th>
                            <th><font size="-6" color="#fff"><center>Envelop #</center></font></th>
                            <th><font size="-6" color="#fff"><center>Payment Type</center></font></th>
                            <th><font size="-6" color="#fff"><center>Envelop #</center></font></th>
                            <th><font size="-6" color="#fff"><center>Date/Time Added</center></font></th>
                            <th><font size="-6" color="#fff"><center>Details</center></font></th>
                          </tr>
                      </thead>
                      <tbody>
                    <?php
                    $sql=mysql_query("SELECT * FROM kiosk_payment WHERE oc_id='$_SESSION[oc_id]' ORDER BY paymentID DESC LIMIT 5");
                    while($row=mysql_fetch_array($sql))
                    {

                        ?>
                    <tr>
                      <td><center><font size="-6" color="#fff"><?php echo "00".$row['paymentID']; ?></font></center></td>
                      <td><center><font size="-6" color="#fff"><?php echo $row['envelop_no']; ?></font></center></td>
                      <td><center><font size="-6" color="#fff"><?php echo $row['payment_type']; ?></font></center></td>
                      <td><center><font size="-6" color="#fff"><?php echo $row['amount']; ?></font></center></td>
                      <?php $date_added=strtotime($row['date_time_payment']); ?>
                      <td><center><font size="-6" color="#fff"><?php echo date("M/d/y - h:i A", $date_added);?></center></font></td>

                      <td>
                        <center>
                          <a href="#" ><!-- <input type='button' class="btn btn-primary btn-sm" value="Check Item"> --><span class="label label-warning label-sm"> View </span></a>
                        </center>
                      </td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table> 
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




