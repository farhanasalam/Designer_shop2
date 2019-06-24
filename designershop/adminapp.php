<?php

		require 'connect.php';
		$id=$_GET['id'];
		$res1=mysqli_query($conn,"select * from designed where read_id='$id'");
		while($row= mysqli_fetch_array($res1))
	// {
	// echo	$ro=($row['m_name']);

	// }
		$res = mysqli_query($conn,"update designed set status=1 where read_id='$id'");
		// $res2 = mysqli_query($conn,"update login set status=1 where email='$ro'");
		header("location: designddrev.php");

 ?>
