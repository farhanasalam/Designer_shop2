<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}

require 'connect.php';
$id=$_SESSION['log_id'];
if (isset($_POST['submit'])) {

	if(isset($_GET['id']))
	{
		$rid=$_GET['id'];
	}

	$qry5="select * from sizechart";
	$ab4 = mysqli_query($conn, $qry5);
// $gh=1;


$hj = array();
	 while ($rest1=mysqli_fetch_array($ab4))
	 {
	$abc=$rest1['sizechart'];
   $hj[$abc]=$_POST[$abc];
	    // $hj[$abc]=",";
// $gh=$gh+1;
	 }
// print_r($hj);
$fj = implode(",", $hj);
print_r($fj);
//echo $k= explode(',', $fj);
$sql = "INSERT INTO dsize  values (NULL,$fj )";

	    mysqli_query($conn,$sql) ;
// $f="insert into dsize values "


	$dcolor=$_POST['dcolor'];
	  $dtype = $_POST['dtype'];
		// $dsz_id=$_POST['dsz_id'];
		// $necksize=$POST['necksize'];
$qty=$_POST['qty'];
 $price=$_POST['price'];
 $status=$_POST['status'];
$pt=$qty*$price;
	$sql1= "INSERT INTO `allselect`(`log_id`,`dcolor`,`md_int`,`dt_id`,`price`,`qty`,`status`) VALUES('$id','$dcolor','$rid','$dtype','$pt','$qty',0)";
				$result11 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
					// $sql3="INSERT INTO `dsize`(`necksize`) VALUES('$necksize')";
					// $result3 = mysqli_query($conn,$sql3)or die (mysqli_error($conn));
					header('location:cart2.php');
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
		<link href="themes/css/main.css" rel="stylesheet"/>
		<link href="themes/css/jquery.fancybox.css" rel="stylesheet"/>

		<!-- scripts -->
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="themes/js/superfish.js"></script>
		<script src="themes/js/jquery.scrolltotop.js"></script>
		<script src="themes/js/jquery.fancybox.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body style="background-image:url('themes/images/ladies/mmm.jpeg');background-size:cover;" >
		 <div id="top-bar" class="container">
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">

						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
						<form class="form-inline" method="post" action="#">
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
					<a href="index.html" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./index.php">Readymades</a>
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>
								</ul> -->
							</li>
							<li><a href="./products.php">Designs</a></li>
							<!-- <li><a href="./products.php">Saloon</a> -->
								<ul>
									<!-- <li><a href="./products.php">Gifts and Tech</a></li>
									<li><a href="./products.php">Ties and Hats</a></li>
									<li><a href="./products.php">Cold Weather</a></li>
								</ul> -->
							</li>

							<li><a href="./products.php">Best Seller</a></li>
							<li><a href="./products.php">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Product Detail</span></h4>
			</section>

			<?php
			if(isset($_GET['id']))
			{
			 $rid=$_GET['id'];
			}
			$qry5="SELECT  mo.md_int,mo.desi_id,mo.md_name,mo.price,i.img1,i.img2,i.img3 FROM image2 as i,models as mo where mo.desi_id=i.desi_id and  mo.img_id=i.img_id and  mo.md_int='$rid'";
		      $ab4 = mysqli_query($conn, $qry5);
 while ($rest1=mysqli_fetch_array($ab4))
 {


?>
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="/designershop/designer/images/uploads/<?php echo $rest1['img1'];?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="/designershop/designer/images/uploads/<?php echo $rest1['img1'];?>"></a>
								 <ul class="thumbnails small">
									<li class="span1">
										<a href="/designershop/designer/images/uploads/<?php echo $rest1['img2'];?>" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="/designershop/designer/images/uploads/<?php echo $rest1['img2'];?>" alt=""></a>
									</li>
									<li class="span1">
										<a href="/designershop/designer/images/uploads/<?php echo $rest1['img3'];?>" class="thumbnail" data-fancybox-group="group1" title="Description 3"><img src="/designershop/designer/images/uploads/<?php echo $rest1['img3'];?>" alt=""></a>
									</li>

								</ul>
							</div>
							<div class="span5">
<h4>	<strong><center>Price: <?php echo $rest1['price'];?></center></strong></h4>

							<div class="span5">



									<!-- <label class="checkbox">
										<input type="checkbox" value=""> Option one is this and that
									</label>
									<br/>
									<label class="checkbox">
									  <input type="checkbox" value=""> Be sure to include why it's great
									</label><br><br> -->
									<input type="color" name="dcolor" value="#ff0000"><br><br>

									<select id="dtype" name="dtype"class="form-control">

																		<?php
																		$conn = mysqli_connect("localhost", "root", "", "designershop");
																		if (!$conn) {
																				echo "Could not connect..Try again";
																		} else {
																			 echo $sql = "Select * from dtype ";
																				$result = mysqli_query($conn, $sql);
																				echo "<option value =><------Select type ------></option>";
																				while ($row = mysqli_fetch_array($result)) {
																						$dtype = $row['dtype'];
																						$dt_id = $row['dt_id'];
																						?>
																						<script>alert($dt_id);</script>
																						<?php
																						echo "<option value='$dt_id'>$dtype</option>";
																				}
																		}
																		mysqli_close($conn);
																		?>
																</select>


									<p>&nbsp;</p>
									<table>

									<?php
									$conn = mysqli_connect("localhost", "root", "", "designershop");
									if (!$conn) {
											echo "Could not connect..Try again";
									} else {
									$qry5="select * from sizechart";
									$ab41 = mysqli_query($conn, $qry5);

									 while ($rest12=mysqli_fetch_array($ab41))
									 {
										 ?>
										<tr>
											 <th><?php echo $rest12['sizechart'];?></th >

											 	<td><input type="number"  name="<?php echo $rest12['sizechart'];?>" class="span1" placeholder="CM"></td>
														</tr>

											 <?php }

										 				mysqli_close($conn);
														 }
										  ?>


										 </table>
									 </br>


									<label>Qty:</label>

									<input type="text" name="qty" class="span1" placeholder="1">

										<input type="hidden"  name="price" value="<?php echo $rest1['price'];?>"/ >
										</br>

																				<button class="btn btn-inverse" name="submit" type="submit">VIEW</button><br>
																				<br>
	 <!-- <input type="submit"name="submit" value="add" ><br><br> -->
<!-- </button> -->
								</form>

							</div>
						</div>

					<?php }
				 ?>
						<!-- <div class="row"> -->
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="home"></div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

							<!-- <div class="span9">
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<a href="product_detail.php"><img src="images/uploads/<?php echo $rest1['image1'];?>" alt="" /></a><br/>
														<a href="product_detail.php" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price"><?php echo $rest1['price'];?></p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<a href="product_detail.php"><img src="images/uploads/<?php echo $rest1['image2'];?>" alt="" /></a></p><br/>
														<a href="product_detail.php" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<a href="product_detail.php"><img src="images/uploads/<?php echo $rest1['image3'];?>" alt="" /></a></p></a><br/>
														<a href="product_detail.php" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
											</ul>
										</div>
		</div>
	</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="span3 col">
						<div class="block">
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div> -->
						<!-- <div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">
							<h4 class="title"><strong>Best</strong> Seller</h4>
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>
							</ul>
						</div>
					</div>
				</div> -->
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contac Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>
						</ul>
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="cart.php">Wish List</a></li>
							<!-- <li><a href="#">Newsletter</a></li> -->
						</ul>
					</div>
					<!-- <div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p> -->
						<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p> -->
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>
				</div>

		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(function () {
				$('#myTab a:first').tab('show');
				$('#myTab a').click(function (e) {
					e.preventDefault();
					$(this).tab('show');
				})
			})
			$(document).ready(function() {
				$('.thumbnail').fancybox({
					openEffect  : 'none',
					closeEffect : 'none'
				});

				$('#myCarousel-2').carousel({
                    interval: 2500
                });
			});
		</script>
	</body>
</html>
