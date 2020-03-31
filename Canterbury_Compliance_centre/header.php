<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CCC - Canterbury compliance Centre</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
      <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">


    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/gallery-grid.css">
    <?php
$conn =mysqli_connect('localhost','root','','ccc') or die('Connection Error');
    ?>
    <?php
    	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";
    ?>
</head>

<body>

    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo.png" alt="Canterbury Compliacnce Centre">
                                    <h2><li><a href="index.php">Canterbury Compliance Centre</a></li></h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                          <?php

						$sql = "SELECT * FROM owner ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

						?>
                            <div class="header_right d-flex align-items-center">
                                <div class="short_contact_list">
                                  <ul>
                                    <li><a href="#"> <i class="fa fa-location-arrow"></i><?php echo $row["address1"]. " " . $row["address2"]. " " . $row["address3"] ; ?></a></li>
                                    <li><a href="#"> <i class="fa fa-table"></i> <?php echo $row["hours"] ; ?></a></li>
                                  </ul>
                                    <ul>
                                      <li><a href="mailto:<?php echo $row["emailId"] ; ?>"> <i class="fa fa-envelope"></i><?php echo $row["emailId"] ; ?></a></li>
                                      <li><a href="#"> <i class="fa fa-phone"></i> <?php echo $row["mobileNo"] ; ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <?php  }
          }  ?>

      <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-12 d-block d-lg-none">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo2.png" alt="">
                                          <h4><li><a href="index.php"> Canterbury Compliacnce Centre</a></li></h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.php">home</a></li>
                                            <li><a  href="service.php">Services</a></li>
                                            <li><a  href="index.php?#testmonial">Testmonials</a></li>
                                            <li><a  href="gallery.php">Gallery</a></li>
                                            <li><a  href="About.php">about</a></li>
                                            <li><a  href="team.php">Our Team</a></li>
                                            <li><a  href="contact.php">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
  </header>
    <!-- header-end -->

    <!-- slider_area_start -->

    <!-- slider_area_end -->
