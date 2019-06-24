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
<html>
<head>
</head>
<body background="themes/images/ladies/mm.jpeg">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: red;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="adminhome.php">Home</a></li>
  <li><a href="userdetails.php">User Details</a></li>
  <li class="dropdown">
    <a href="desigr_details.php" class="dropbtn">Designer Details</a>
    <div class="dropdown-content">
    </div>

	<li class="dropdown">
    <a href="view.php" class="dropbtn">view designers</a>
    <div class="dropdown-content">
    </div>

	<li class="dropdown">
    <a href="usercartt.php" class="dropbtn">View payment</a>
    <div class="dropdown-content">

    </div>
	<li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </li>
</ul>

</ul>






</body>
</html>

<center>
  <br><br>
<h1>DESIGNER DETAILS</h1>
<body background="themes/images/new.png">
  <head>
    <style>
    .color {
      font-size: 25px;
background-color: white;

    }
    </style>
  </head>
<table border=2 class="color">
<tr>


	<td><b>NAME</b></td>
 	<td><b>ADDRESS</b></td>
	<td><b>GENDER</b></td>
  <td><b>QUALIFICATION</b></td>
  <td><b>CERTIFICATE</b></td>
  <td><b>EMAIL</b></td>
  <td><b>CONTACT</b></td>


<?php
$res = mysqli_query($conn,"select * from staff_reg where status=0");
if(mysqli_num_rows($res))
{
while($rows = mysqli_fetch_array($res))
{
?>
<tr>
<br>


	<td><?php echo $rows['dname'];?></td>
		<td><?php echo $rows['daddress'];?></td>
			<td><?php echo $rows['gender'];?></td>
      <td><?php echo $rows['qualification'];?></td>
      <td><?php echo $rows['certificate'];?></td>
      <td><?php echo $rows['email'];?></td>
      <td><?php echo $rows['dcontact'];?></td>

      <?php


      echo "<td><a href='approve.php?id=".$rows['desi_id']."' onClick=\"return confirm('Are you sure you want to Approve?')\"  >APPROVE</a> |<a href='delete.php?id=".$rows['desi_id']."' onClick=\"return confirm('Are you sure you want to delete?')\">DELETE</a></td>";


      echo "</tr>";


}}

      ?>

<td><a href="adminhome.php"><label style="color:black" >BACK </a></td>
