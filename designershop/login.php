<?php
session_start();

include"connect.php";


 if(isset($_POST["submit1"]))
 {
 	           $email=$_POST["email"];   //username value from the form
 	           $password=md5($_POST["password"]);	//password value from the form
        echo     $sqll="select * from login where email='$email' and pwd ='$password' and status=1"; //sql query to the table
 	           $res=mysqli_query($conn,$sqll);  //query executing function

    if($res)
        {
 	           if($fetch=mysqli_fetch_array($res))
 	               {
 		                     if($fetch['role_id']==1)
 		             {

					   	$_SESSION["log_id"]=$fetch['log_id'];
 			        $_SESSION["email"]=$email;	// setting username as session variable
 	            header("location:adminhome.php");	//home page or the dashboard page to be redirected
                 }
 	            elseif($fetch['role_id']==2)
 		             {
             $_SESSION["email"]=$email;	// setting username as session variable
 		         $_SESSION["log_id"]=$fetch['log_id'];

 	           header("location:index.php");
 	                }
            elseif($fetch['role_id']==3)
                    {
             $_SESSION["email"]=$email;	// setting username as session variable
            $_SESSION["log_id"]=$fetch['log_id'];
            header("location:designer/index.php");
                    }
        }
		}
}

                //    else
                //    {
                //          echo "<script>alert('invalid credentials!')</script>";
                //    }
                // else
                //     {
                //         echo '<script> alert("Unauthorized access!!!")</script>';
                    // }


 ?>


<!DOCTYPE html>
<html lang="en">
<!-- <link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
<script src="js/jquery.min.js"> </script>
<script src="js/oh-autoval-script.js"></script> -->
	<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>

		<!-- global styles -->
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
         <body style="background-image:url('themes/images/ladies/mmmm.jpeg');background-size:cover;" >
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="post" action="#"  >
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>

			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="index.html" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">


				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Login

                </span> </h4>
<form action="#" method="post" class="oh-autoval-form">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" name="email" id="username" class="input-xlarge av-email">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">password</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="password" id="password" class="input-xlarge av-password" >
									</div>
                                </div>

									<input tabindex="3" class="btn btn-inverse large" type="submit" name="submit1" value="Sign into your account">

									<hr>
									<p class="reset">Recover your <a  href="mails/forgotpassword.php" title="Recover your username or password">username or password</a></p>

                                Don't have an account yet? <a href="register.php">Register</a>

                        </div>
							</fieldset>
						</form>

					</div>
