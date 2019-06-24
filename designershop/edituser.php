<?php
include '../db.php';
$id = $_SESSION['login_id'];
$id=$_GET["login_id"];
if(isset($_POST["submit"]))
{
  $a=$_POST["name"];
  $b=$_POST["birth"];
  $c=$_POST["address"];
  $d=$_POST["phonenumber"];
  echo $Photo=$_FILES['photo']['name'];
  move_uploaded_file($_FILES['photo']['tmp_name'],"photo/".$Photo);
  mysqli_query($con,"UPDATE `userregistration` SET `name`='$a',`birth`='$b',`address`='$c',`phonenumber`='$d'
    WHERE login_id=$id");
    header("Location:viewww.php");
  }
  $result = mysqli_query($con,$qry="select * from `userregistration` WHERE login_id=$id");
  $res=mysqli_fetch_array($result);
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"  content="width=device-width, initial-scale=1">
    <title>Contact Information Form Template - reusable form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css" >
    <script src="form.js"></script>
    <body>
      <div class="container">
        <div class="container form-top">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
              <div class="panel panel-danger">
                <div class="panel-body">
                  <form action="#" method="post"  enctype="multipart/form-data">
                    <th <label >Name</label></th>
                    <input type="text" name="name" required class="form-control"  value="<?php echo $res["name"];?>">
                  </div>
                  <label >DOB</label>
                  <input type="date" name="birth" required class="form-control"  value="<?php echo $res["birth"];?>">
                </div>
                <div class="form-group">
                  <label >Address</label>
                  <input type="text" name="address" required class="form-control"  value="<?php echo $res["address"];?>">
                </div>
                <div class="form-group">
                  <label >Phonenumber</label>
                  <input type="text" name="phonenumber" required class="form-control" value="<?php echo $res["phonenumber"];?>">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="submit">
                </div>
              </form>
            </body>
            </html>
