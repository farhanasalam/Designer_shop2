<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
} ?>


<?php

		require 'connect.php';
//echo $lid;
 $sql    = "SELECT * FROM user_reg WHERE log_id='$log_id'";
            $result = mysqli_query($conn,$sql) or die(mysqli_error());
            while ($row = mysqli_fetch_array($result))
            {

                $name= $row['name'];
				$lastname=$row['house_no'];
				$phone=$row['email'];
				$gender=$row['contact'];
			  //   $dob = $row['dob'];
				// $housenumber=$row['housenumber'];
				// $wardnumber=$row['wardnumber'];
				// $locality=$row['locality'];
				// $district=$row['district'];
				// $email=$row['email'];

                //$Password = $row['User_password'];
            }
			if(isset($_POST['edit']))
    {
		$a=$_POST['name'];
		$b=$_POST['house_no'];
	     $c=$_POST['email'];
		 $d=$_POST['contact'];
		 // $g=$_POST['dob'];
		 // $e=$_POST['housenumber'];
		 // $f=$_POST['wardnumber'];
		 // $h=$_POST['locality'];
		 // $i=$_POST['district'];



		//echo $n;

       //$name=$_POST['firstname'];
        //$dob=$_POST['dob'];
		 $sql = "UPDATE `user_reg` SET `name`='$a',`house_no`='$b',`email`='$c',`contact`='$d',WHERE r_id='$log_id'";
		// echo $sql;
		 mysqli_query($conn, $sql);
//if(mysqli_query($con, $sql)){
   // echo "Record was updated successfully.";
//}
//else {
   // echo "ERROR: Could not able to execute $sql. ";
//}
	}
?>
