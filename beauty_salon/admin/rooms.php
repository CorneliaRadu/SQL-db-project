<script>
	function delRoom(id)
	{
		if(confirm("Doriti sa stergeti acest serviciu ?"))
		{
		window.location.href='delete_produs.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Detalii Servicii</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms" class="btn btn-primary">Adauga Noi Servicii</a></td>
	</tr>
	<tr style="height:40">
		
		<th>Numar</th>
		<th>Durata</th>
		<th>Nume_serviciu</th>
		<th>Pret</th>
		<th>Detalii</th>
		<th>Update</th>
		<th>Stergeti</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from produse");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['produs_id'];	
;

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		
		<td><?php echo $res['durata']; ?></td>
		<td><?php echo $res['nume']; ?></td>
		<td><?php echo $res['pret']; ?></td>
		<td><?php echo $res['detalii']; ?></td>

		<td><a href="dashboard.php?option=update_room&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delRoom('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>