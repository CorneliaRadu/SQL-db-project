<?php 
session_start();
error_reporting(1);
include('connection.php');
$eid=$_SESSION['create_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update create_account set nume='$nume',parola='$pass',mobil='$mob',adresa='$add' where email='$eid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:blue'>Profile Updated successfully</h3>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
 <?php
     $sql= mysqli_query($con,"select * from creaza_cont where email='$eid' "); 
     $result=mysqli_fetch_assoc($sql);
?>
<div class="container-fluid"id="primary"><!--Primary Id-->
  <center><h1 style="background-color:#ed2553;border-radius:50px;font-family: 'Baloo Bhai', cursive;box-shadow:5px 5px 9px blue;text-shadow:2px 2px#000;display:inline-block;">User Profile</h1></center><br>
  <div class="container">
    <div class="row">
	<center><?php  echo $msg; ?></center>
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
          <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Name :</h4></div>
                <div class="col-sm-8">
                 <input type="text" nume="nume" value="<?php echo $result['nume']; ?>"class="form-control"/>
          </div>
        </div>
      </div>

      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Email-Id:</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['email']; ?>"class="form-control"/readonly="readonly">
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Parola:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="pass" value="<?php echo $result['parola']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Mobil:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="mob" value="<?php echo $result['mobil']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Adresa:</h4></div>
                <div class="col-sm-8">
                 <input type="text" name="add" value="<?php echo $result['adresa']; ?>"class="form-control"/>
          </div>
        </div>
      </div>
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4>Gen:</h4></div>
                <div class="col-sm-8">
                 <strong><?php echo $result['gen']; ?></strong>
          </div>
        </div>
      </div>
      
      <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-5"></div>
                <div class="col-sm-7	">
                 <input type="submit" value="Update Profile" name="update" class="btn btn-primary"/>
          </div>
        </div>
      </div>
	  
    </div>
<!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>
<?php
include('Footer.php')
?>
</body>
</html>
