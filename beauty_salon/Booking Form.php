<?php 
include('Menu Bar.php');
include('connection.php');
if($eid=="")
{
header('location:Login.php');
}
$sql= mysqli_query($con,"select * from detalii_programare where email='$eid' "); 
$result=mysqli_fetch_assoc($sql);
//print_r($result);
extract($_REQUEST);
error_reporting(1);
if(isset($savedata))
{
  $sql= mysqli_query($con,"select * from detalii_programare where email='$email' and data_programare='data' ");
  if(mysqli_num_rows($sql)) 
  {
  $msg= "<h1 style='color:red'>Ati facut deja programare</h1>";    
  }
  else
  {

   $sql="insert into detalii_programare(nume,email,mobil,adresa,tara,nume_produs,ora) 
  values('$nume','$email','$mobil','$adresa','$tara',
  '$nume_produs','$cdate','$ctime')";
   if(mysqli_query($con,$sql))
   {
   $msg= "<h1 style='color:blue'>Ati facut programarea cu succes</h1>"; 
   }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Salon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
  <?php
  include('Menu Bar.php');
  ?>
<div class="container-fluid text-center"id="primary"><!--Primary Id-->
  <h1>[ FORMULAR PROGRAMARI ]</h1><br>
  <div class="container">
    <div class="row">
      <?php echo @$msg; ?>
      <!--Form Containe Start Here-->
     <form class="form-horizontal" method="post">
       <div class="col-sm-6">
         <div class="form-group">
           <div class="row">
              <div class="control-label col-sm-4"><h4> Nume :</h4></div>
                <div class="col-sm-8">
                 <input type="text" value="<?php echo $result['nume']; ?>"  class="form-control" nume="nume" placeholder="Introduceti numele"required>
          </div>
        </div>
      </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Email :</h4></div>
          <div class="col-sm-8">
              <input type="email" value="<?php echo $result['email']; ?>"  class="form-control" name="email"  placeholder="Introduceti Email-Id"required/>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Mobil :</h4></div>
          <div class="col-sm-8">
              <input type="number" value="<?php echo $result['mobil']; ?>" class="form-control" name="mobil" placeholder="Introduceti numarul"required>
          </div>
        </div>
        </div>

        <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Adresa :</h4></div>
          <div class="col-sm-8">
              <textarea name="adresa" class="form-control"  placeholder="Introduceti adresa"><?php echo $result['adresa'];  ?></textarea>
          </div>
        </div>
        </div>

         <div class="form-group">
          <div class="row">
           <div class="control-label col-sm-4"><h4>Tara</h4></div>
          <div class="col-sm-8">
              <input type="text" class="form-control"   value="<?php echo $result['tara']; ?>" name="tara" placeholder="Introduceti tara"required>
          </div>
        </div>
        </div>

   

         

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                <div class="control-label col-sm-5"><h4>Data_Programare :</h4></div>
                  <div class="col-sm-7">
                  <input type="date" name="cdate" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <div class="row">
                 <div class="control-label col-sm-5"><h4>Ora_programare:</h4></div>
                   <div class="col-sm-7">
                    <input type="time" name="ctime" class="form-control"required>
                  </div>
              </div>
            </div>
          </div>
    
         
            <input type="submit"value="submit" name="savedata" class="btn btn-danger"required/>
          </div>
          </form><br>
        </div>
      </div>
    </div>
  </div>
<?php
include('Footer.php')
?>
</body>
</html>
