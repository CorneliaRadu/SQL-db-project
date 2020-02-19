<?php 
if(isset($update))
{
$sql=mysqli_query($con,"select * from admin where username='$admin' and parola='$op' ");
	if(mysqli_num_rows($sql))
	{
		if($np==$cp)
		{
		mysqli_query($con,"update admin set parola='$np' where username='$admin' ");	
		echo "<h3 style='color:blue'>Succes schimbare parola</h3>";
		}
		else
		{
			echo "<h3 style='color:red'>Parolele nu corespund</h3>";
		}
	}
	else
	{
	echo "<h3 style='color:red'>Parola veche nu corespunde</h3>";	
	}
	
}
?>
<form method="post" enctype="multipart/form-data">
<table class="table table-bordered table-striped table-hover">
	<h1>Update Parola</h1><hr>
	<tr style="height:40">
		<th>Introduceti parola veche</th>
		<td><input type="parola" name="op" class="form-control"required/></td>
	</tr>
	
	<tr>	
		<th>Introduceti parola noua</th>
		<td><input type="parola" name="np" class="form-control"required/>
		</td>
	</tr>
	
	<tr>	
		<th>Confirmati parola</th>
		<td><input type="parola" name="cp" class="form-control"required/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2" align="center">
			<input type="submit" class="btn btn-primary" value="Update Parola" name="update"required/>
		</td>
	</tr>
</table> 
</form>