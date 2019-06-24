<?php
include "connect.php";

if(isset($_POST["submit"]))
{
    $dname=$_POST["dname"];
    $password=md5($_POST["password"]);
   $confirm_password=md5($_POST["confirm_password"]);
    $gender=$_POST["gender"];
    $daddress=$_POST["daddress"];
    $qualification=$_POST["qualification"];
    $certificate=$_POST["certificate"];
    $email=$_POST["email"];
    $dcontact=$_POST["dcontact"];

    //print_r($_POST);
    if($confirm_password== $password)

  {

    $q="insert into `staff_reg`(`dname`,`gender`,`daddress`,`qualification`,
        `certificate`,`email`,`dcontact`,`status`) values ('$dname','$gender','$daddress',
         '$qualification','$certificate','$email','$dcontact','0')";
         mysqli_query($conn,$q);


                 $last_id=mysqli_insert_id($conn);

    $sql="INSERT INTO `login`(`r_id`,`email`,`pwd`,`role_id`,`status`) VALUES('$last_id','$email','$confirm_password','3','0')";

     $result1=mysqli_query($conn,$sql);
     // $log_id="select `log_id` from `login` where `email`='$email'";
     // $result2=mysqli_query($conn,$log_id);


        //
        // {
        //     $l=$row["log_id"];
            // $q="insert into `user_reg`(`name`,`password`,`confirm_password`,`house_no`,
            // `city`,`email`,`contact`)values ('$name','$password','$confirm_password','$house_no',
            // '$city','$email','$contact')";
            //  mysqli_query($conn,$q);






               // while($row=mysqli_fetch_array($result2$last_id=mysqli_insert_id($conn);))

               header("location: login.php");

				//}

  }
}

?>
<!DOCTYPE html>
<html lang="en">

	<head>
    <link rel="stylesheet" type="text/css" href="val/oh-autoVal-style.css">
  <script src="val/jquery-3.2.1.min.js"> </script>
  <script src="val/oh-autoVal-script.js"></script>

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

		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>

				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Register</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span5">


					<div class="span7">
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="#" class="oh-autoval-form" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" name="dname"  placeholder="Enter your username" class="input-xlarge av-username" required>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" name="password" class="input-xlarge av-password">
									</div>
								</div><div class="control-group">
									<label class="control-label">Confirm Password:</label>
									<div class="controls">
										<input type="password" name="confirm_password" placeholder="Enter your password" class="av-password"class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">gender:</label>
									<div class="controls">
										<input type="radio" name="gender"  class="input-xlarge" value=male checked >male
                                        <input type="radio" name="gender"  class="input-xlarge" value=female >female
                                        <input type="radio" name="gender"  class="input-xlarge" value=others >others
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">address:</label>
									<div class="controls">
										<input type="text" name="daddress" class="av-required" placeholder="Enter your address" class="input-xlarge">
									</div>
								</div>

                                <div class="control-group">
									<label class="control-label">qualification:</label>
									<div class="controls">
										<input type="text" name="qualification" class="av-required" placeholder="Enter your qualification" class="input-xlarge">
									</div>
								</div>

                                <div class="control-group">
									<label class="control-label">certificate:</label>
									<div class="controls">
										<input type="file" name="certificate" class="av-pdf" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">email:</label>
									<div class="controls">
										<input type="email" name="email" class="av-email" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">number:</label>
									<div class="controls">
										<input type="text" name="dcontact" class="av-mobile" placeholder="Enter your number" class="input-xlarge">
									</div>
								</div>
								<!-- <div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div> -->
								<hr>
								<div class="actions">
									<input tabindex="9" class="btn btn-inverse large" name="submit" type="submit" value="submit"></div>
							</fieldset>
						</form>
					</div>
				</div>
			</section>


		</div>

</body>

</html>
