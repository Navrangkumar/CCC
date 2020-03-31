
<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Canterbury Compliance Centre Admin Panel</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />

     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">

                <a class="navbar-brand" href="index.php"><strong> Admin Panel</strong></a>



            </div>

            <ul class="nav navbar-top-links navbar-left">

                <!-- /.dropdown -->
                <h2>Canterbury Compliance Centre</h2>

            </ul>
            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="updateCompanyProfile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li><a href="/CCC/Canterbury_compliance_centre/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


								 		<li>
										 <a href="index.php"><i class="fa fa-qrcode"></i> Manage Enquiry Details</a>
								 		</li>
					          <li>
                        <a href="InsertServices.php"><i class="fa fa-qrcode"></i> Manage Services</a>
						      	</li>
                    <li>
                        <a href="Testmonials.php"><i class="fa fa-qrcode"></i>Testmonials</a>
                    </li>

                    <li>
                        <a href="manageGallery.php"><i class="fa fa-qrcode"></i>Gallery</a>
                    </li>
                    <li>
                        <a href="UpdateAbout.php"><i class="fa fa-qrcode"></i>Change About Us</a>
                    </li>
                    <li>
                        <a href="manageEmployee.php"><i class="fa fa-qrcode"></i>Manage Employee Details</a>
                    </li>
										<li>
                        <a href="contact.php"><i class="fa fa-qrcode"></i>Manage Contact Us</a>
                    </li>
                </ul>

            </div>

        </nav>
