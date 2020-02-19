
<table class="table table-bordered table-striped table-hover">
	<h1>Detalii programari</h1><hr>
	<tr>
		<th>Id</th>
		<th>Nume</th>
		<th>Email</th>
		<th>Mobil</th>
		<th>Adresa</th>
		<th>Nume_serviciu</th>
		<th>Data_programare</th>
		<th>Ora_programare</th>
		
	</tr>

<?php 
$i=1;
$sql=mysqli_query($con,"select * from detalii_programare");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['nume']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobil']; ?></td>
		<td><?php echo $res['adresa']; ?></td>
		<td><?php echo $res['nume_produs']; ?></td>
		<td><?php echo $res['data']; ?></td>
		<td><?php echo $res['ora']; ?></td>
		
	</td>
	</tr>
<?php 	
}

?>	
</table>