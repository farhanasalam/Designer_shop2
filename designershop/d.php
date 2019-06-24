<?php
session_start();
if(!$_SESSION['log_id'])
{
  header('location:home.php');
}
?>
<?php
require 'connect.php';
?>
<center>
<h1>DESIGNS</h1>
<head>
  <style>
  .color {
    font-size: 25px;


  }
  </style>
</head>
<body background="themes/images/new.png">
  <form action="#" method="post">
<table border=2 class="color">
<tr>


<table>
                                <tr>
                                    <th>product name</th>
                                    <th>Image1</th>
                                    <th>image2</th>
                                    <th>Image3</th>
                                    <th>type</th>
                                    <th>size</th>
                                    <th>color</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                      <th>settings</th>
                                </tr>
                                <tr>

<?php
$res = mysqli_query($conn,"select * from designed where status=0");
if(mysqli_num_rows($res))
{
while($rows = mysqli_fetch_array($res))
{
?>
<tr>


<td><center><?php echo $rest1['m_name'];?></center></td>

<!--</center></td>-->
<td><img src="/designershop/designer/images/uploads/<?php echo $rest1['image1'];?>" width="70" height="70"/></td>
<td><img src="/designershop/designer/images/uploads/<?php echo $rest1['image2'];?>" width="70" height="70"/></td>
<td><img src="/designershop/designer/images/uploads/<?php echo $rest1['image3'];?>" width="70" height="70" /></td>
<td><center><?php echo $rest1['type'];?></center></td>
 <td><center><?php echo $rest1['size'];?></center></td>
 <td><center><?php echo $rest1['color'];?></center></td>
<td><center><?php echo $rest1['quantity'];?></center></td>
 <td><center><?php echo $rest1['price'];?></center></td>


 <td><input  type="text" hidden="hidden" name="read_id" value="<?php echo $rest1['read_id'];?>"></td>
 <td>
 echo "<td><a href='adminapp.php?id=".['read_id']."' onClick=\"return confirm('Are you sure you want to Approve?')\"  >APPROVE</a></td>"; 

<?php


      // echo "<td><a href='approve.php?id=".$rows['desi_id']."' onClick=\"return confirm('Are you sure you want to Approve?')\"  >APPROVE</a> |<a href='delete.php?id=".$rows['desi_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";




}
}
?>
</table>
</form>
</body>
</html>
