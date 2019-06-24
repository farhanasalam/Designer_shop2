<?php
include "connect.php";

if(isset($_POST['status'])&& $_POST['status']=="1")
{
  $snme = $_POST['state'];
  $query = "SELECT `dis_id`, `dis_name` FROM `district` WHERE `st_id` = '$snme' AND `status` = '1'";
  $result=mysqli_query($conn,$query);
  echo "<option value = > <-- Select district --> </option>";
  while($row=mysqli_fetch_array($result))
  {
    echo "<option value='".$row['dis_id']."'>".$row['dis_name']."</option>";
  }
}
?>
