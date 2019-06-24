<?php
 $con = mysqli_connect("localhost", "root", "", "designershop");

if(isset($_POST['status'])&&$_POST['status']=="1")
{
  $size_id = $_POST['size_id'];
  $query = "SELECT `color_id`,`color_id` FROM `color` WHERE `size_id` = '$size_id' AND `status` =1 ";
  $result=mysqli_query($conn,$query);
  echo "<option value = > </option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['color_id']."'>".$row['color_id']."</option>";
  }

}
?>
