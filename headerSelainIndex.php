<!DOCTYPE html>
<html lang="en">
<?php include 'database.php';?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BeasiswaKu</title>
    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <!-- Preloader -->
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="screen, print"/>

    <!-- Icon Font-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="css/animate.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-2.1.4.min.js"></script>


    <!-- Style -->
    <link href="css/styleHeaderSelainIndex.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/lte-ie7.js"></script>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href="css/login-register.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	

	<script src="js/login-register.js" type="text/javascript"></script>
</head>

<body>
                <!-- Preloader -->
                <div id="preloader">
                    <div id="status">&nbsp;</div>
                </div>



			<div id="header">
               <nav class="navbar navbar-default navbar-fixed-top"id="menubar"> 
	              <div class="container">
	                <!-- Brand and toggle get grouped for better mobile display -->
	                <div class="navbar-header">
	                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	   
						</button>

	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  <ul class="nav navbar-nav navbar-right">
						
	                    <li><a href="index.php">Home</a></li>
	                    <li><a href="#SERVICE">Pemberi Beasiswa</a></li>
	                    <li><a href="kumpulanPencariBeasiswa.php">Pencari Beasiswa</a></li>
						

					
					
						
						<?php
							session_start();
							$username="";
							if(isset($_SESSION["userlogin"])){
								$logout = "logout";
								$url = "index.php?logout=true";
								$username = $_SESSION["userlogin"];
								echo "<li><a href =".$url.">Logout(".$username.")</a></li>";
							}
							else{
								$href = "javascript:void(0)";
								$dataToggle = "modal";
								$onClick ="openLoginModal()";
								echo "<li><a data-toggle=".$dataToggle." href=".$href." onclick=".$onClick.">Login</a></li>";
							}
							
						
						?>
						<?php 
							if(isset($_GET["logout"])){
								if($_GET['logout'] == 'true'){
									header("Location: index.php");
								
									session_destroy(); 
								}
							}
								
						?>
		
	
					
					     <li class="dropdown">
						  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign-Up
						  <span class="caret"></span></a>
						  <ul class="dropdown-menu" id="dm">
							<li ><a data-toggle="modal" id="dm1" href="javascript:void(0)" onclick="openRegisterPemberiBeasiswaModal();" >Pemberi Beasiswa</a></li>
							<li><a id="dm2"  data-toggle="modal" href="javascript:void(0)" onclick="openRegisterPencariBeasiswaModal();">Pencari Beasiswa</a></li>
						  </ul>
						</li>
						</ul>
						
						
					</div><!-- /.navbar-collapse -->
	              </div><!-- /.container -->
	            </nav> 
		</div>
			
    <div class="container">
       
       
		 <div class="modal fade login" id="loginModal">
		      <div class="modal-dialog login animated">
    		      <div class="modal-content">
    		         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  
                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
								<?php include 'login.php';?>
                             </div>
                        </div>

						 <?php include 'registerPencariBeasiswa.php';?>      
						 <?php include 'registerPemberiBeasiswa.php';?>      
                    </div>
    		      </div>
		      </div>
		  </div>
    </div>

	 