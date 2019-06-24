<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}
?>
<?php
if(isset($_GET['id']))
{
	$rid=$_GET['id'];
}
$logid=$_SESSION['log_id'];
require 'connect.php';
echo $r="select sum(price) as f from cart where log_id=$logid and status=0";
$k=mysqli_query($conn,$r);
while($res =mysqli_fetch_array($k))
{
  $tprice=$res['f'];
$_SESSION['price']=$tprice;
}


require 'connect.php';
echo $qry5="SELECT  c.price as uprice,c.*,d.*,i.* from cart as c,designed as d ,image as i WHERE c.log_id=$logid and c.read_id=d.read_id and d.im_id=i.im_id and c.status=0" ;
     $ab4 = mysqli_query($conn, $qry5);
//
// $logid=$_SESSION['log_id'];
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
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="themes/js/respond.min.js"></script>
		<![endif]-->
	</head>
    <body>
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><a href="myaccount.php">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<!-- <li><a href="di.php">Checkout</a></li> -->
							<li><a href="logout.php">logout</a></li>
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
							<li><a href="index.php">Designed Dress</a>
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>
								</ul> -->
							</li>
							<li><a href="./products.php">Designs</a></li>
							<!-- <li><a href="./products.php">Saloon</a> -->
								<!-- <ul>
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul>
							</li> -->

							<!-- <li><a href="./products.php">Best Seller</a></li>
							<li><a href="./products.php">Top Seller</a></li> -->
						</ul>
					</nav>
				</div>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span9">
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">

							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<?php

						while ($rest1=mysqli_fetch_array($ab4))
						{


						?>



							<tbody>
								<tr>
									<td><a href="remove.php?id=<?php echo $rest1['cart_id'];?>">Remove</a></td>
										<td><a href="/designershop/designer/images/uploads/<?php echo $rest1['image1'];?>" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt="" src="/designershop/designer/images/uploads/<?php echo $rest1['image1'];?>"></a>

										<td>	<strong>Name: <?php echo $rest1['m_name'];?></strong></td>
										<td> <?php echo $rest1['qty'];?></strong></td>
										<td><strong><?php echo $rest1['price'];?></strong></td>
												<td><strong> <?php echo $rest1['uprice'];?> </strong></td>
											</tr>
											<?php }
												 ?>

												<tr>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>
													<td>&nbsp;</td>

													<td><strong><?php echo $tprice;?></strong></td>

												</tr>
											</tbody>
											</table>

									<!-- <td>$2,350.00</td> -->
								</tr>

	<p class="buttons center">
								<td><a href="disdetails.php">
							<button class="btn" type="button" id="disdetails">Continue</button>
<a href = "payment.php" class="btn btn-sucess"</a>
						<button class="btn btn-inverse" type="submit" id="payment">BUY NOW</button>

						</p>
					</div>

		<script src="themes/js/common.js"></script>
		<script>

			// $(document).ready(function() {
			// 	$('#remid').change(function (e) {
			// 		document.location.href = "checkout.php";
			// 	})
			// });
		</script>
    </body>
</html>
