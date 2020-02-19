<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from produse where produs_id='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "acest produs a fost deja adaugat";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into produse values('','$rno','$type','$price','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../image/rooms/".$_FILES['img']['name']);
	echo "Rooms added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Nume</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	
	
	<tr>	
		<th>Pret</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Detalii</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Adauga Serviciu Nou" name="add"/>
		</td>
	</tr>
</table> 
</form>