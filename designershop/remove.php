<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}
if(isset($_GET['id']))
{
	$rid=$_GET['id'];
}
require 'connect.php';
 $sql="DELETE  from cart where cart_id='$rid'";
$res=mysqli_query($conn,$sql);
if ($res) {
	 echo"<script> alert(' Successful')
				  window.location.href = 'cart.php';</script>";

}

?>
