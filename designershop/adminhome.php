<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}
?>




<html>
<head>
</head>

<body background="themes/images/ladies/mm.jpeg">
<style>
.color {
	font-size: 25px;
color:white;

}
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
  <!-- <li class="dropdown">
    <a href="designddrev.php" class="dropbtn">approve designed dress</a>
    <div class="dropdown-content">

    </div> -->
		<li class="dropdown">
	    <a href="usercartt.php" class="dropbtn">Order Dress</a>
	    <div class="dropdown-content">

	    </div>
	<li class="dropdown">
    <a href="gallery.php" class="dropbtn">View payment</a>
    <div class="dropdown-content">

    </div>
	<li style="float:right"><a class="active" href="logout.php">Logout</a></li>
  </li>
</ul>

</ul>



<table class="color">
<p><b><bold>HAII ADMIN<bold><b><p></table>

</body>
</html>
