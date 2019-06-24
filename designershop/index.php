<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}

?>

<?php
// if(isset($_GET['id']))
// {
// 	$rid=$_GET['id'];
// }

require 'connect.php';
$qry5="SELECT de.read_id,de.m_name,de.quantity,de.price,i.image1,i.image2,i.image3,c.color,t.type FROM color as c,type as t,image as i,designed as de where  de.color_id=c.color_id and de.type_id=t.type_id and de.im_id=i.im_id ";
     $ab4 = mysqli_query($conn, $qry5);

?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DESIGNER SHOP</title>
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
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" action="search.php" style="display: flex;">

					<input type="text" name="m_name"class="input-block-level search-query" style="    margin-top: 5px;" Placeholder="eg. T-sirt">
<input type="submit" class="btn btn-info" name="submit" value ="search"  style="    margin: 5px;">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><a href="myaccount.php">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="disdetails.php">Checkout</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="index.php">Readymades</a>

									</li>
									<li><a href="./products.php">designs</a></li>
									<!-- <li><a href="./products.php">Saloon</a>

									</li>

									<li><a href="./products.php">Best Seller</a></li>
									<li><a href="./products.php">Top Seller</a></li> -->
								</ul>
							</li>

					</nav>
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
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>
			</section>



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
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">

												<?php

											while ($rest1=mysqli_fetch_array($ab4))
											{


											?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php?id=<?php echo $rest1['read_id'];?>"><img width='200px' height='200px' src="/designershop/designer/images/uploads/<?php echo $rest1['image1'];?>" alt="" /></a></p>
														<a href="product_detail.php?id=<?php echo $rest1['read_id'];?>" class="title"><?php echo $rest1['m_name'];?></a><br/>
														<a href="products.php" class="category"><?php echo $rest1['type'];?></a>
														<p class="price">$<?php echo $rest1['price'];?></p>
													</div>
												</li>

																				<?php }
																				 ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br/>



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
