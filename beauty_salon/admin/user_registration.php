<table class="table table-bordered table-striped table-hover">
	<h1>Registru clienti</h1><hr>
	<tr>
		<th>ID</th>
		<th>Nume</th>
		<th>Email</th>
		<th>Parola</th>
		<th>Mobil</th>
		<th>Adresa</th>
		<th>Gen</th>
		
		
	</tr>
	<?php 
$i=1;
$sql=mysqli_query($con,"select * from creaza_cont");
while($res=mysqli_fetch_assoc($sql))
{
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['nume']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['parola']; ?></td>
		<td><?php echo $res['mobil']; ?></td>
		<td><?php echo $res['adresa']; ?></td>
		<td><?php echo $res['gen']; ?></td>
		
		
	</td>
	</tr>	
<?php 	
}
?>	