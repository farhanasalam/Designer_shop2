<?php
include "connect.php";
//include '';
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$password=md5($_POST["password"]);
$confirm_password=md5($_POST["confirm_password"]);
$house_no=$_POST["house_no"];

$city=$_POST["city"];
$district=$_POST["district"];
$state=$_POST["state"];
$email=$_POST["email"];
$contact=$_POST["contact"];

// print_r($_POST);
					 if($confirm_password== $password)

				     {
							 $q="insert into `user_reg`(`name`,`house_no`,
							`c_id`,`email`,`contact`,`status`)values ('$name','$house_no',
							'$city','$email','$contact','1')";
							mysqli_query($conn,$q);
							$last_id=mysqli_insert_id($conn);
				echo $sql="INSERT INTO login(`email`,`pwd`,`role_id`,`status`,`r_id`) VALUES('$email','$password','2','1','$last_id')";



							 $result=mysqli_query($conn,$sql);


              	header("location: login.php");



			      	}
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- <link rel="stylesheet" type="text/css" href="val/oh-autoVal-style.css">
<script src="val/jquery-3.2.1.min.js"> </script>
<script src="val/oh-autoVal-script.js"></script> -->
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
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>

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
										<input type="text" name="name" class="av-username" av-message="required" placeholder="Enter your username" class="input-xlarge">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" class="av-password" av-message="Password must contain uppercase,
										lo/wercase,special chars,digits and minimum 6 chars." name="password" class="input-xlarge">
									</div>
								</div><div class="control-group">
									<label class="control-label">Confirm Password:</label>
									<div class="controls">
										<input type="password" name="confirm_password" class="av-password" av-message="mismatch"placeholder="Enter your password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">House number:</label>
									<div class="controls">
										<input type="text" name="house_no" av-message="required" class="av-required" placeholder="Enter your house number" class="input-xlarge">
									</div>
								</div>


								<div class="input-group">
                             <div class="input--style-3">state
									<div class="controls">
             <!--<input type="text"   class="input-xlarge" required/>-->
                 <select  name="state" id="state" required/>
                  <option value="-1">select</option>

            <?php
						$conn=mysqli_connect("localhost","root","","designershop");
						if(!$conn)
						{
							echo'could not connect.....Try again!';
						}else{
            $q = mysqli_query($conn, "SELECT st_id,st_name FROM state where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
							$snme=$row['state'];
							$cid=$row['st_id'];
                echo '<option value=' . $row['st_id'] . '>' . $row['st_name'] . '</option>';
            }
					}

					mysqli_close($conn);
	?>

              </select>
                                                                        </div>
									</div>
								</div>
								<script>

														$("#state").on("change", function () {
																$("#district").html("");
																$cnme = $("#state").val();
																var data=new FormData();
																data.append("state",$cnme);
																data.append("status","1");
																// find courselevels
																//data: {'state': $cnme, "status": "1"},
																$.ajax({
																		method: 'post',
																		url: 'getdistrict.php',
																		processData: false,
																		contentType: false,
																		data: data,
																		success: function (data)
																		{

																				// console.log(data);
																				$("#district").html(data);
																		}
																});
														});



												</script>


							<div class="control-group">
									<label class="control-label">district:</label>
									<div class="controls">
									<select  name="district" id="district" required/>
                        <option value="-1">select</option></select>
									</div>
								</div>
								<script >
								$("#district").on("change", function () {
												$("#city").html("");
												$snme = $("#district").val();

												// find courselevels
												$.ajax({
														url: 'getcity.php',
														method: 'POST',
														data: {'district': $snme, "status": "1"},
														success: function (data)
														{
																// console.log(data);
																$("#city").html(data);
														}
												});
										});
								</script>
									<div class="control-group">
									<label class="control-label">city:</label>
									<div class="controls">
									<select  name="city" id="city" required/>
                        <option value="-1">select</option></select>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">email:</label>
									<div class="controls">
										<input type="email" name="email" class="cv-email" av-message="required" placeholder="Enter your email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">number:</label>
									<div class="controls">
										<input type="text" name="contact" class="av-mobile" av-message="Mobile number validation (10 numbers)
" placeholder="Enter your number" class="input-xlarge">
									</div>
								</div>

								<hr>
								<div class="actions">
									<input tabindex="9" class="btn btn-inverse large" name="submit" type="submit" value="submit"></div>
							</fieldset>
						</form>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">


					<div class="span5">

						<p>WE CREATE UNIQUE & GORGEOUS THINGS</p
							<ul class="nav">
								<li><a href="./home.php">Homepage</a></li>
							</ul>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype </a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>
				</div>
			</section>

		</div>
		<!-- <script src="themes/js/common.js"></script>
		 <script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>  -->
		<!-- <script src="assets/js/jquery-3.3.1.min.js"></script>
		<script>
			$(document).ready(function() {

$("#state").on("change", function(){
		 $state = $('#state').val();

		 $html = "";
		 $.ajax({
				 type:'post',
				 data:{'index':$state},
				 url:'getdistrict.php',
				 success:function(data){
						 $data = JSON.parse(data);
						 $html = '<option value="">--SELECT DISTRICT--</option>';
						 for(var index=0; index<$data.length; index++){
								$html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
						 }

						 $("#district").html($html);
				 }
		 });
});


$("#district").on("change", function(){
		 $district = $('#district').val();
		 //alert($taluk);
		 $html = "";
		 $.ajax({
				 type:'post',
				 data:{'index':$district},
				 url:'getcity.php',
				 success:function(data){
						 $data = JSON.parse(data);


						 $html = '<option value="">--SELECT CITY--</option>';
						 for(var index=0; index<$data.length; index++){
								$html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
						 }

						 $("#city").html($html);
				 }
		 });
});

}); -->



</script>

</body>

</html>
