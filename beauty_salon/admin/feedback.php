<script>
	function delFeedback(id)
	{
		if(confirm("Doriti sa stergeti acest  Feedback ?"))
		{
		window.location.href='delete_feedback.php?id='+id;	
		}
	}
</script>
<table class="table table-striped table-hover">
	<h1>Feedback</h1><hr>
	<tr>
		<th>Numar</th>
		<th>Nume</th>
		<th>Email</th>
		<th>Mobil</th>
		<th>Mesaj</th>
		<th>Stergeti</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from feedback");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$name=$res['nume'];
$email=$res['email'];
$mobile	=$res['mobil'];
$message=$res['mesaj'];
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['nume']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['mobil']; ?></td>
		<td><?php echo $res['mesaj']; ?></td>
		<td><a href="#"onclick="delFeedback('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove"style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>