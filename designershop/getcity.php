<?php
$conn = mysqli_connect("localhost", "root", "", "designershop");
if(isset($_POST['status'])&&$_POST['status']=="1")
{
  $dnme = $_POST['district'];
  $query = "SELECT `c_id`, `cname` FROM `city` WHERE `dis_id` = '$dnme' AND `status` = '1'";
  $result=mysqli_query($conn,$query);
  echo "<option value = > <-- Select city --> </option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['c_id']."'>".$row['cname']."</option>";
  }
}
?>
