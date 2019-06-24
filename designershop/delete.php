<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
} ?>


<?php

		require 'connect.php';
		$id=$_GET['id'];
		$res1=mysqli_query($conn,"select email from staff_reg where desi_id='$id'");
		while($row= mysqli_fetch_array($res1))
	{
	echo	$ro=($row['email']);

	}
		$res = mysqli_query($conn,"update staff_reg set status=0 where desi_id='$id'");
		$res2 = mysqli_query($conn,"update login set status=0 where email='$ro'");
		header("location: desigr_details.php");

 ?>
