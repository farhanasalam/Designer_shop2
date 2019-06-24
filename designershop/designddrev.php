
<html>
<head>
  <style>
  .color {
    font-size: 25px;
background-color: white;

  }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    <a href="designddrev.php" class="dropbtn">View designed dress</a>
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






</body>
</html>

<?php
require 'connect.php';
 $qry5="SELECT de.read_id,de.m_name,de.quantity,de.price,i.image1,i.image2,i.image3,ad.ads_id,s.size_id,s.size,c.color,t.type FROM addsize as ad ,size as s,color as c,type as t,image as i,designed as de where  de.color_id=c.color_id and de.type_id=t.type_id and de.im_id=i.im_id and de.read_id=ad.read_id and ad.size_id=s.size_id";
     $ab4 = mysqli_query($conn, $qry5);
?>
                            <table >
                                <tr>
                                    <th scope="col">product name</th>
                                    <th scope="col">Image1</th>
                                    <th scope="col">image2</th>
                                    <th scope="col">Image3</th>
                                    <th scope="col">type</th>
                                    <th scope="col">size</th>
                                    <th scope="col">color</th>
                                    <th scope="col">quantity</th>
                                    <th scope="col">price</th>
                                      <th scope="col">settings</th>
                                </tr>
                                <tr>
                                  <?php

        while ($rest1=mysqli_fetch_array($ab4))
	 {
          ?>
 <form action="#" method="post">
   <table border="1" class="color">
   <tr>
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




</table>
            <!-- <a href="editproduct.php?uid=<?php echo $rest1["productid"];?>" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
            <a href="deleteproduct.php?uid=<?php echo $rest1["productid"];?>" class="del_btn" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                </td> -->




      </tr>

 <?php

}
                                                 ?>
