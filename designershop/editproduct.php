<?php
include 'staffheader.php';
?>
<?php
//session_start();

if(isset($_POST["submit"]))
{
    $kid=$_GET["uid"];
    $productname = $_POST['productname'];
    $producttype = $_POST['producttype'];
    $productdescription = $_POST['productdescription'];
    $size= $_POST['size'];
    $color= $_POST['color'];
    $quantity= $_POST['quantity'];
    $price = $_POST['price'];
    $image=$_POST['imid'];
    $file_name1 = time().".jpg";
    $file_tmp1 = $_FILES['tkvsoft']['tmp_name'];
    move_uploaded_file($file_tmp1,"imgs/".$file_name1);
    
         
    $file_name2 = $_FILES['image2']['name'];
    $file_tmp2 = $_FILES['image2']['tmp_name'];
    move_uploaded_file($file_tmp2,"imgs/".$file_name2);
         
    $file_name3 = $_FILES['image3']['name'];
    $file_tmp3 = $_FILES['image3']['tmp_name'];
    move_uploaded_file($file_tmp3,"imgs/".$file_name3);
    $sql="UPDATE `tbl_image` SET `image1`='$file_name1', `image2`='$file_name2',`image3`='$file_name3'  WHERE imageid='$image'";

    mysqli_query($con,$sql); 
    
   $imid=mysqli_insert_id($con);
 mysqli_query($con,"UPDATE `tbl_addproduct` SET `typeid`='$producttype', `imageid`='$image',`sizeid`='$size',`colorid`='$color',`productname`='$productname',`productdescription`='$productdescription',`quantity`='$quantity',`price`='$price' WHERE `productid`='$kid'");
 //header("Location:viewproduct.php");
}
$kid=$_GET["uid"];
$qry5="SELECT ap.productid,ap.productname,ap.productdescription,ap.quantity,ap.price,i.image1,i.image2,i.image3,s.size,c.color,t.type ,i.imageid
        FROM tbl_size as s ,tbl_color as c,tbl_type as t,tbl_image as i,tbl_addproduct as ap 
        where ap.sizeid=s.sizeid and ap.colorid=c.colorid and ap.typeid=t.typeid and ap.imageid=i.imageid and ap.productid='$kid'";
$ab4 = mysqli_query($con, $qry5);




?>

<div class="single-product-tab-area mg-b-30" style="width:1480px;margin-left:205px;margin-top:-440px;">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="product-status-wrap">
                            <h4>Products</h4>
                            <div class="add-product">
                                <a href="viewproduct.php">View</a>
                            </div>
<?php
while($row=mysqli_fetch_array($ab4))
	 {
          ?>
                                <form action="#" method="post" enctype="multipart/form-data">
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="productname" value="<?php echo $row['productname']; ?>" class="form-control" placeholder="Product Name">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
<!--                                                        <input type="text" class="form-control" placeholder="Product Type">-->
                                                    <select  name="producttype" id="type" value="<?php echo $row['type']; ?>"placeholder="Product Type" class="form-control">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "ims");
                                       if (!$con) {
                                            echo "Could not connect..Try again";
                                    } else {
                                        echo $sql = "Select typeid, type from tbl_type where status=1";
                                          $result = mysqli_query($con, $sql);
                                           echo "<option value =><------Select type ------></option>";
                                           while ($row1 = mysqli_fetch_array($result)) {
                                               $type = $row1['type'];
                                                $typeid = $row1['typeid'];
                                               ?>
                                                <script>alert($typeid);</script>
                                                <?php
                                              echo "<option value='$typeid'    ".($row['type'] == $type ? 'selected' : '')." >$type</option>";                                          }
                                      }
                                     mysqli_close($con);
                                        ?>
                                    </select>
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <textarea name="productdescription" class="form-control" placeholder="Product Description"><?php echo $row['productdescription']; ?></textarea>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        
                                                        
                                            <img src="imgs/<?php echo $row['image1'];?>" width="30" height="30">&nbsp;
                                            <img src="imgs/<?php echo $row['image2'];?>" width="30" height="30">&nbsp;
                                            <img src="imgs/<?php echo $row['image3'];?>" width="30" height="30">


<input type="file" name="tkvsoft"  class="form-control" placeholder="Image1">

heellooo




                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="file" name="image2" value="<?php echo $row['image2']; ?>" class="form-control" placeholder="Image2">
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="file" name="image3" value="<?php echo $row['image3']; ?>" class="form-control" placeholder="Image3">
                                                    </div>
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>

                                                        <select  name="size" id="size" value="<?php echo $row['size']; ?>"placeholder="Size" class="form-control">
                                        <?php
                                        $con = mysqli_connect("localhost", "root", "", "ims");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                           echo $sql1 = "Select sizeid, size from tbl_size where status=1";
                                            $result = mysqli_query($con, $sql1);
                                            echo "<option value =><------Select Size  ------></option>";
                                            while ($row2 = mysqli_fetch_array($result)) {
                                                $size = $row2['size'];
                                                $sizeid = $row2['sizeid'];
                                                ?>
                                                <script>alert($sizeid);</script>
                                                <?php
                                                echo "<option value='$sizeid'    ".($row['size'] == $size ? 'selected' : '')." >$size</option>";
                                            }
                                        }
                                        mysqli_close($con);
                                        ?>
                                    </select>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                                                     <div class="form-select">
                                    <select  name="color" id="color" value="<?php echo $row['color']; ?>"class="form-control" placeholder="Color" required/> 
                                   <option value="-1"><------Select Color------></option>
 <?php
                                    $con = mysqli_connect("localhost", "root", "", "ims");
                                        if (!$con) {
                                            echo "Could not connect..Try again";
                                        } else {
                                           echo $sql1 = "Select colorid, color from tbl_color where sizeid='$sizeid'";
                                            $result = mysqli_query($con, $sql1);
                                            echo "<option value =><------Select Size  ------></option>";
                                            while ($row2 = mysqli_fetch_array($result)) {
                                                $color = $row2['color'];
                                                $colorid = $row2['colorid'];
                                            ?>
                                     <script>alert($sizeid);</script>
                                    
                                    
                                    <?php
                                    echo "<option value='$colorid'    ".($row['color'] == $color ? 'selected' : '')." >$color</option>";
                                            }
                                        }
         
                                    mysqli_close($con);
                                    ?>
                                </select>
                                                                                         
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>              
                                                                                                  </div>
                                                   
                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>"class="form-control" placeholder="Quantity">
                                                    </div>
                                                     <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" name="price" value="<?php echo $row['price']; ?>"class="form-control" placeholder="Per Piece Price">
                                                    </div>
<!--                                                <select name="select" class="form-control pro-edt-select form-control-primary">
															<option value="opt1">Select One Value Only</option>
															<option value="opt2">2</option>
															<option value="opt3">3</option>
															<option value="opt4">4</option>
															<option value="opt5">5</option>
															<option value="opt6">6</option>
														</select>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <input  type="hidden"  name="imid" value="<?php echo $row['imageid'];?>">
                                                    <input type="submit" name="submit" id="submit" value="Save" class="btn btn-ctl-bt waves-effect waves-light m-r-10">
														
                                                   <input type="submit" name="submit1" value="Discard" class="btn btn-ctl-bt waves-effect waves-light">
							
							<?php
                                                          }
                                                        ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                  
                                    
                                    
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script>
            $("#size").on("change", function () {
                $("#color").html("");
                $sizeid = $("#size").val();
                $.ajax({
                    url: 'data/data.php',
                    method: 'POST',
                    data: {'sizeid': $sizeid, "status": "1"},
                    success: function (data)
                    {
                
                        $("#color").html(data);
                    }
                });
            });
        



        </script>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>


     </script>

        </body>

</html>
<br>
<br>
<br>
<br>
<?php
include 'footer.php';
?>