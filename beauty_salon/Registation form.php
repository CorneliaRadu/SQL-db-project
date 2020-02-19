<?php
include('connection.php');
extract($_REQUEST);
if(isset($save))
{
  $sql= mysqli_query($con,"select * from creaza_cont where email='$email' ");
  if(mysqli_num_rows($sql))
  {
  $msg= "<h1 style='color:red'> account already exists</h1>";    
  }
  else
  {

      $sql="insert into creaza_cont(nume,email,parola,mobil,adresa,gen) values('$fname','$email','$Passw','$mobi','$addr','$gend')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:green'>Date salvate cu succes</h1>"; 
   header('location:Login.php'); 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
</head>
<body style="margin-top:50px;">
  <?php 
include('Menu Bar.php');
  ?>
<div class="container-fluid"style="background-color:#4286f4;color:#000;"> <!-- Primary Id-->
  <div class="container">
    <div class="row">
      <center><h1 style="background-color:#ed2553; border-radius:50px;display:inline-block;"><b><font color="#080808">Create New Account?</font></b></h1></center>
       <center><?php echo @$msg;?></center><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-6 ">
        <form class="form-horizontal"method="post">
          <div class="form-group">

            <div class="control-label col-sm-5"><h4>Nume :</h4></div>
          <div class="col-sm-7">
              <input type="text" name="fname" class="form-control"placeholder="Introduceti nume"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Email-Id:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="email" class="form-control"placeholder="Introduceti Email-id" autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Parola :</h4></div>
          <div class="col-sm-7">
              <input type="password" name="Passw" class="form-control"placeholder="Introduceti parola"autocomplete="off"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Mobil:</h4></div>
          <div class="col-sm-7">
              <input type="text" name="mobi" class="form-control"placeholder="Introduceti numar"required>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4>Adresa :</h4></div>
          <div class="col-sm-7">
              <textarea  name="addr" class="form-control"required></textarea>
          </div>
        </div>

        <div class="form-group">
            <div class="control-label col-sm-5"><h4 id="top">Gen :</h4></div>
          <div class="col-sm-7">
              <input type="radio" name="gend"value="male"required><b>Masculin</b>&emsp;
              <input type="radio" name="gend"value="male"required><b>Feminin</b>&emsp;
              
          </div>
          </div>


     
            <input type="submit" value="Introduceti" name="save"class="btn btn-success btn-group-justified"required style="color:#000;font-family: 'Baloo Bhai', cursive;height:40px;"/>
          </div>
          
        </form>
        </div>
      </div>
        <div class="col-sm-4">
        </div>
    </div>
  </div>
</div>
<?php
    include('Footer.php')
?>
</body>
</html>
