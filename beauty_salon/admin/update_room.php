<?php 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from produse where produs_id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update produs set durata='$rno',tip='$type',pret='$price',detalii='$details' where produs_id='$id' ");
header('location:dashboard.php?option=produse');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Cod_serviciu</th>
		<td><input type="text"  name="rno" value="<?php echo $res['durata']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Nume_serviciu</th>
		<td><input type="text" name="type" value="<?php echo $res['tip']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Pret</th>
		<td><input type="text" name="price"  value="<?php echo $res['pret']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Detalii</th>
		<td><textarea name="details"  class="form-control"><?php echo $res['detalii']; ?></textarea>
		</td>
	</tr>
	
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update serviciu" name="update"/>
		</td>
	</tr>
</table> 
</form>