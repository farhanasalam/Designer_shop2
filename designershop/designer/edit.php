<?php
require 'connect.php';
 echo $qry5="SELECT de.read_id,de.m_name,de.quantity,de.price,i.image1,i.image2,i.image3,s.size,c.color,t.type FROM size as s ,color as c,type as t,image as i,designed as de where de.size_id=s.size_id and de.color_id=c.color_id and de.type_id=t.type_id and de.im_id=i.im_id ";
     $ab4 = mysqli_query($conn, $qry5);
?>
<div class="product-status mg-b-30" style="width:1295px;margin-left:205px;margin-top:-450px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="addproduct.php">Add Product</a>
                            </div>
                            <table style="">
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Type</th>
                                    <th>Product Description</th>
                                    <th>Image1</th>
                                     <th>Image2</th>
                                      <th>Image3</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th></th>
                                     <th>Setting</th>

                                </tr>
                                <?php

        while ($rest1=mysqli_fetch_array($ab4))
	 {


          ?>
 <form action="#" method="post">
      <tr>

          <td><center><?php echo $rest1['productname'];?></center></td>
         <td><center><?php echo $rest1['category'];?></center></td>
        <td><center><?php echo $rest1['type'];?></center></td>
        <td><center><?php echo $rest1['productdescription'];?></center></td>
 <td><img src="imgs/<?php echo $rest1['image1'];?>" width="70" height="70"/></td>
 <td><img src="imgs/<?php echo $rest1['image2'];?>" width="70" height="70"/></td>
 <td><img src="imgs/<?php echo $rest1['image3'];?>" width="70" height="70" /></td>
         <td><center><?php echo $rest1['size'];?></center></td>
         <td><center><?php echo $rest1['color'];?></center></td>
        <td><center><?php echo $rest1['quantity'];?></center></td>
         <td><center><?php echo $rest1['price'];?></center></td>


 <td><input  type="text" hidden="hidden" name="productid" value="<?php echo $rest1['productid'];?>"></td>

        <td>

            <a href="editproduct.php?uid=<?php echo $rest1["productid"];?>" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp;&nbsp;
            <a href="deleteproduct.php?uid=<?php echo $rest1["productid"];?>" class="del_btn" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                </td>




      </tr>
  <?php

}
                                                 ?>

                            </table>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
include 'db.php';
if (isset($_POST['delete'])) {

$pid=$_POST["productid"];
mysqli_query($con,"DELETE FROM `tbl_addproduct` WHERE productid='$pid'");
header("location:editproduct.php");
}
?>
<br>
<br>
<br>
<br>
<br>
<?php
include 'footer.php';
?>
