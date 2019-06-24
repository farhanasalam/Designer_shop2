<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:designer/home.php');
}
?>
<?php
if(isset($_GET['id']))
{
	$rid=$_GET['id'];
}


require 'connect.php';
 $qry5="SELECT di.*,de.*,c.*,d.*,s.*,ca.* ,i.* from image as i,disdetails as di,cart as ca,city as c,district as d,state as s,designed as de WHERE i.im_id=de.im_id and di.read_id=ca.read_id and ca.read_id=de.read_id and c.c_id=di.c_id and s.st_id=d.st_id and d.dis_id=c.dis_id " ;
     $ab4 = mysqli_query($conn, $qry5);
//
// $logid=$_SESSION['log_id'];
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
      <a href="designddrev.php" class="dropbtn">approve designed dress</a>
      <div class="dropdown-content">

      </div>

  	<li class="dropdown">
      <a href="usercartt.php" class="dropbtn">Oder dress</a>
      <div class="dropdown-content">

      </div>
  	<li style="float:right"><a class="active" href="logout.php">Logout</a></li>
    </li>
  </ul>

  </ul>






  </body>
  </html>

  <center>
  <h1>DESIGNER DETAILS</h1>
  <body background="themes/images/new.png.">
    <head>
      <style>
      .color {
        font-size: 25px;
  background-color: white;

      }
      </style>
      </head>

  <table border="2" class="color">
  <tr>



                                        <th>  User Name</th>
    																					<th>  Quantity</th>
    																		  <th>  Price</th>
                                            <th>Image</th>

                                          <?php

                                        while ($rest1=mysqli_fetch_array($ab4))
                                        {
                                        ?>
                                        <form action="#" method="post">
                                        <tr>




                                        <!--</center></td>-->

                                        <td><center><?php echo $rest1[3];?></center></td>
                                        <td><center><?php echo $rest1[34];?></center></td>
                                        <td><center><?php echo $rest1[35];?></center></td>
                                        <td><center><td><img src="/designershop/designer/images/uploads/<?php echo $rest1[38]; ?>" width="70" height="70"/></td>


                                        <td><input  type="text" hidden="hidden" name="read_id" value="<?php echo $rest1['read_id'];?>"></td>
                                        <td>
                                        <?php }
                                         ?>

  <tr>






  <td><a href="adminhome.php?uid=<?php echo $rows_fetched['desi_id'];?>&action=1"><label style="color:black" >BACK </a></td>
