<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}

require 'connect.php';
if(isset($_POST["submit"]))
{
				// session_start();
				$e=$_SESSION['log_id'];
				$amt=$_SESSION['price'];

	 $n=$_POST["cardno"];
	$mnt=$_POST["month"];
	$yr=$_POST["year"];
	$cvv=$_POST["cvv"];
// $b_id=$_POST['b_id'];
	$bank=$_POST["bankname"];
 $f="select * from `tbl_bank` where `username`='$e'";
$results=mysqli_query($conn,$f);
$rse=mysqli_fetch_array($results);
$b_id=$rse['b_id'];
if($rse['cardno'] == $n)
{
	if( $rse['cash'] < $amt)
	{
		echo "<script>alert('you have insufficent balance')</script>";
	}

else{

		$final= $rse['cash'];
      $final_amt= $final-$amt;

		echo $sql1="INSERT INTO `tbl_payment`(`r_id`,`b_id`,`amount`) VALUES ('$e', '$b_id','$amt')";

	$result1=mysqli_query($conn,$sql1);
	echo $sql2="UPDATE `tbl_bank` SET `cash`='$final_amt' WHERE `username`='$e'" ;
	$res2=mysqli_query($conn,$sql2);

	echo $sql3="INSERT INTO `tbl_adminbank`(`r_id`,`cash`,`status`) VALUES ('$e',
	'$amt','1')";
	$result3=mysqli_query($conn,$sql3);
echo    $sql4="UPDATE  `cart` SET `status`= '1' WHERE `log_id`=$e" ;

	// echo '<script>window.location="index.php"</script>';
 echo "<script>alert('sucess')</script>";


	}
}

	else
	 {
	 	echo "<script>alert('The card Number you Entered is Wrong')</script>";
	 }


}
?>

<html>
<style>
a:hover {
    background-color: white;
}

</style>
<body style="height:570px;width:1310px" background="cart.jpg">
<form  method="post">
 <!-- <label style="font-family:Arial Rounded MT; color:black;font-size:70;margin-left: 164px;font-family:forte">U stora</label><br><br><br>


<div style= "background-color: Lavender;font-size:23;width: 1300px;padding: 5px;margin: 15px"><marquee><label style="color:black;font-size:23">Cash On Delivary Facility Available</label></marquee></div>

<div style= "float:left;background-color: lightgrey;font-size:23;width: 180px;padding: 25px;margin: 25px"> Contact:<img src="logo.png" height=99 width=99 style="margin-top:-25"><br>
<label style="font-size:12">U stora <br>
Kanjirapally<br>
Ph:9859238560 </div> -->
<div style="float:left;background-color: lightblue;font-size:23;width: 480px;padding: 35px;margin: 55px"><label style="margin-left:172px;color:red">Payment Details</label><br><br>
<label style="margin-left:57px">Card No:</label><input type="text" name="cardno" style="margin-left:67px"><br><br>
<label style="margin-left:57px">Bank:</label><input type="text" name="bankname" style="margin-left:97px"><br><br>
 <label style="margin-left:57px">Expiry(mm/yy):</label><input type="text" name="month" placeholder ="mm"style="margin-left:4px;width:43px">/<input type="text" name="year" placeholder ="yy"style="margin-left:3px;width:43px"><br><br>
<label style="margin-left:57px">CVV:</label><input type="text" name="cvv" style="margin-left:100px"><br><br>

<input type="submit" name="submit" value="Complete Order" style="margin-left:279px"></div>
<!--<div style="float:left;background-color: lightgrey;font-size:23;width: 180px;padding: 25px;margin: 25px"><a href="newa.mp4">

</div><div style="float:left;background-color: lightgrey;font-size:23;width: 180px;padding: 25px;margin: 25px"><img src="giff2.gif" height=164 width=175></div>

<div style="float:left;background-color: black;font-size:23;width: 1280px;height:12px;padding: 25px;margin:25px"><img src="firstpicc.png" height=45 width=54 style="margin-top:-13px"><label style="color:white;font-size:15">U stora© All Rights Reserved 2016</label></div>-->

</form>
</body>
</html>
