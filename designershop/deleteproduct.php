<?php
include 'db.php';
$kid=$_GET["uid"];
$imageid = "SELECT `imageid` FROM `tbl_addproduct` WHERE `productid`='$kid'";
$result2 = mysqli_query($con, $imageid);
$row = mysqli_fetch_array($result2);
$a = $row["imageid"];

mysqli_query($con,"DELETE FROM `tbl_addproduct` WHERE productid='$kid'");
mysqli_query($con,"DELETE FROM `tbl_image` WHERE imageid='$a'");
header("Location:viewproduct.php")
?>

