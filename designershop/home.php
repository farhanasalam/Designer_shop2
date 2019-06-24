<?php
session_start();
if(isset($_SESSION['log_id']))
{
	header('location:home.php');
}
?>


<!DOCTYPE html>
<html lang="en">
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

	</head>
 <body style="background-image:url('themes/images/ladies/mmmm.jpeg');background-size:cover;" >
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST"  class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">


                            <section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<!-- <a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a> -->
					<nav id="menu" class="pull-right">
						<ul>
                        <li><a href="#">My Account</a></li>

                        <li><a href="gallery.php">gallery</a></li>
							<li><a href="login.php">login</a></li>
							</li>

							<li><a >Register</a>
								<ul>
									<li><a href="./staffreg.php">Designer</a></li>
									<li><a href="./register.php">Customer</a></li>

								</ul>
							</li>

						</ul>
					</nav>
				</div>
			</section>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>

				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/ladies/mm.jpeg" alt="" />
						</li>
						<li>
							<img src="themes/images/ladies/mm.jpeg" alt="" />
							<div class="intro">
								<h1>WE MADE YOU BEAUTIFUL</h1>
								<p><span>WHY ARE YOU WAITING</span></p>
								<p><span>EXPLORE OUR SERVICES</span></p>
							</div>
						</li>
					</ul>
				</div>

			<section class="main-content">
				<div class="row">
					<div class="span12">
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<p class="title"> <b>Ut wisi enim ad</p>
														<a href="login.php" class="category">BUY NOW</a>
                             <p class="price">500 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="register.php"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
														<a class="title">Quis nostrud exerci tation</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">600 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
														<a class="title">Know exactly turned</a><br/>
										<a href="login.php" class="category">BUY NOW</a>
														<p class="price">700 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
														<a class="title">You think fast</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">700 rs</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
														<a  class="title">Know exactly</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">800 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
														<a  class="title">Ut wisi enim ad</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">500 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
														<a class="title">You think water</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">600 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
														<a class="title">Quis nostrud exerci</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">700 rs</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="register.php"><img src="themes/images/cloth/2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi ead</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">700 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/cloth/1.jpg" alt="" /></a></p>
														<a class="title">Quis nostrud exerci tation</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">700 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/cloth/3.jpg" alt="" /></a></p>
														<a  class="title">Know exactly turned</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">800 rs</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="register.php"><img src="themes/images/cloth/5.jpg" alt="" /></a></p>
														<a class="title">You think fast</a><br/>
														<a href="login.php" class="category">BUY NOW</a>
														<p class="price">900 rs</p>
													</div>
												</li>
											</ul>
										</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
							<li><a href="./register.php">register</a></li>
							<li><a href="./login.php">Login</a></li>
						</ul>
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="login.php">My Account</a></li>
							<li><a href="login.php">Order History</a></li>
							<li><a href="login.php">Wish List</a></li>

						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p></p>
						<br/>

					</div>
				</div>

		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
