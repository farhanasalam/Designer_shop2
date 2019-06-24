
<?php
session_start();
if(!$_SESSION['log_id'])
{
	header('location:home.php');
}
require 'connect.php';

if (isset($_POST['submit'])) {

    $m_name = $_POST['m_name'];
    $type = $_POST['type'];


  $size=implode(',', $_POST['sizes']);
    $color= $_POST['color'];
    $quantity= $_POST['quantity'];
    $price = $_POST['price'];
    $material_img=$_FILES['image1']['name'];
      move_uploaded_file($_FILES['image1']['tmp_name'],"images/uploads/".$material_img);
      $material_img2=$_FILES['image2']['name'];
        move_uploaded_file($_FILES['image2']['tmp_name'],"images/uploads/".$material_img2);
        $material_img3=$_FILES['image3']['name'];
          move_uploaded_file($_FILES['image3']['tmp_name'],"images/uploads/".$material_img3);



  $sql11 = "INSERT INTO `image`(`image1`,`image2`, `image3`,`status`) VALUES ('$material_img','$material_img2','$material_img3',1)";
    $result11 = mysqli_query($conn, $sql11) or die(mysqli_error($conn));

  $imageid = "SELECT `im_id` FROM `image` WHERE `image1`='$material_img' and `image2`='$material_img2' and `image3`='$material_img3'";
   $result22 = mysqli_query($conn, $imageid);
   while ($row = mysqli_fetch_array($result22)) {
    $b = $row["im_id"];
   echo $sql1 = "INSERT INTO `designed`(`type_id`, `im_id`, `size_id`,`color_id`,
            `m_name`,`quantity`,`price`)
            VALUES ('$type','$b','$size','$color','$m_name','$quantity',
            '$price')";
    $result1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
   }
    // if ($result1) {
    //    echo"<script> alert(' Successful')
		// 				 window.location.href = 'staffhome.php';</script>";
    //
    // }
}
?>

<?php
$qry5="select * from size";
$ab4 = mysqli_query($conn, $qry5);

?>

<html>
<head>




<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="t.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body style="background-image:url('themes/images/ladies/mm.jpeg');background-size:cover;" >
  <nav class="header_nav">
    <ul class="d-flex flex-row align-items-center justify-content-start">
      <li><a href="indexde.php">home</a></li>
      <li><a href="profile.php">profile</a></li>
      <li><a href="designed_dress">Add Designed Dress</a></li>
      <li><a href="models">Add Models</a></li>
      <li><a href="gallery.php">Gallery</a></li>
      <li><a href="#">contact</a></li>
    </ul>
  </nav>
<div class="container" style="background-color:white;width:800">
            <form class="form-horizontal" method="POST" action="#" role="form" enctype="multipart/form-data">
                <h2><center>ADD MATERIALS</center></h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Material Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="m_name" name="m_name"placeholder="Material Name" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Image 1</label>
                    <div class="col-sm-9">
                      <input type="file" name="image1" class="form-control"  placeholder="Image1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Image2</label>
                    <div class="col-sm-9">
                        <input type="file" name="image2" class="form-control"  placeholder="Image1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Image3</label>
                    <div class="col-sm-9">
                        <input type="file" name="image3" class="form-control"  placeholder="Image1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-6">
                        <select id="type" name="type"class="form-control">

                                          <?php
                                          $conn = mysqli_connect("localhost", "root", "", "designershop");
                                          if (!$conn) {
                                              echo "Could not connect..Try again";
                                          } else {
                                             echo $sql = "Select * from type ";
                                              $result = mysqli_query($conn, $sql);
                                              echo "<option value =><------Select type ------></option>";
                                              while ($row = mysqli_fetch_array($result)) {
                                                  $type = $row['type'];
                                                  $type_id = $row['type_id'];
                                                  ?>
                                                  <script>alert($type_id);</script>
                                                  <?php
                                                  echo "<option value='$type_id'>$type</option>";
                                              }
                                          }
                                          mysqli_close($conn);
                                          ?>
                                      </select>

                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Size</label>
                    <div class="col-sm-3" >
												<table>
											<?php
											while ($rest1=mysqli_fetch_array($ab4))
											{
												?>

													<tr>
														<td>
															 <?php echo $rest1['size'];?>
														</td>
														<td>
											<input type="checkbox" name="sizes[]" id="sizes" value="<?php echo $rest1['size_id'];?>" >
														</td>

													</tr>
														<?php	} ?>
												</table>




                </div>
							</div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">color</label>
                    <div class="col-sm-6">
                        <select id="color" name="color"class="form-control">


                                            <?php
                                            $conn = mysqli_connect("localhost", "root", "", "designershop");
                                            if (!$conn) {
                                                echo "Could not connect..Try again";
                                            } else {
                                               echo $sql = "Select * from color ";
                                                $result = mysqli_query($conn, $sql);
                                                echo "<option value =><------Select color------></option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $color = $row['color'];
                                                    $color_id = $row['color_id'];
                                                    ?>
                                                    <script>alert($color_id);</script>
                                                    <?php
                                                    echo "<option value='$color_id'>$color</option>";
                                                }
                                            }
                                            mysqli_close($conn);
                                            ?>
                        </select>
                    </div>
                </div><!-- /.form-group -->
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">quantity</label>
                    <div class="col-sm-6">
                        <input type="text" id="quantity" name="quantity" placeholder="quantity" class="form-control" autofocus>

                    </div>
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">price</label>
                    <div class="col-sm-6">
                        <input type="text" id="MName" name="price" placeholder="price" class="form-control" autofocus>

                    <!-- </div>
                </div> -->
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-3">
                        <input type="submit" name="submit"  value="Register" class="btn btn-primary btn-block">
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->


</body>
</html>
