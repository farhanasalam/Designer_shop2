<?php
session_start();
if(!$_SESSION['log_id'])
{
  header('location:home.php');
}

require 'connect.php';
echo $log_id=$_SESSION['log_id'];

       $q = "SELECT * from login as l, user_reg as u,city as c,district as d,state as s where l.log_id='54' and c.c_id=u.c_id and s.st_id=d.st_id and d.dis_id=c.dis_id and u.r_id=l.r_id";
        $data = mysqli_query($conn, $q) or die(mysqli_error($conn));
      while ($r = mysqli_fetch_array($data))

{


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
  	<body style="background-image:url('themes/images/ladies/mm.jpeg');background-size:cover;" >
  <style>
  .color {
    font-size: 25px;
  	color:#414141;
background-color: white;
  }
  </style>

<br><br>
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
             <li><a href="./products.php">Saloon</a>

             </li>

             <li><a href="./products.php">Best Seller</a></li>
             <li><a href="./products.php">Top Seller</a></li>
           </ul>
         </li>

     </nav>
   </div>
 </section>
 <section  class="homepage-slider" id="home-slider">
   <div class="flexslider">
     <ul class="slides">
       <li>
         <img src="themes/images/pageBanner.png" alt="" />
       </li>
       <h4><span><center>MY ACCOUNT</center></span></h4>
       <!-- <li>
         <img src="themes/images/pageBanner.png" alt="" />
         <div class="intro">
           <h1>Mid season sale</h1>
           <p><span>Up to 50% Off</span></p>
           <p><span>On selected items online and in stores</span></p>
         </div>
       </li> -->
     </ul>
   </div>
 </section>

<div class="modal-dialog">
					<div class="modal-content">
            <div class="modal-header book-form">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                <!-- <h4><center><bold>My Account</bold></center></h4> -->




                <form method="post">
                    <table align="center" class="color">
<br><br>
                    <tr><td><b>Name</b></td><td><?php echo $a=$r[7]; ?></td></tr>
                    <tr><td><b>Address</b></td><td><?php echo $b=$r[8];; ?></td></tr>
                    <tr><td><b>email</b></td><td><?php echo $c=$r[10];; ?></td></tr>
                    <tr><td><b>contact</b></td><td><?php echo $d=$r[11];; ?></td></tr>
                    <tr><td><b>state</b></td><td><?php echo $f=$r[14];; ?></td></tr>
                    <tr><td><b>district</b></td><td><?php echo $e=$r[19];; ?></td></tr>
                    <tr><td><b>city</b></td><td><?php echo $g=$r[22];; ?></td></tr>

                </table>
                <?php
}?>
                </form>

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
