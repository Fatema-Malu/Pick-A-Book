
<html>
<body>

	<table>
		<tr>
			<th>Id</th>
			<th>Name</th>
		</tr>
	<?php
include_once "connection.php";
$sql="select * from category;";
$r=mysqli_query($conn,$sql);
$rc=mysqli_num_rows($r);
while($row=mysqli_fetch_assoc($r))
{
	?>
	

		<tr>
			<td><?php echo $row['cid'];  ?></td>
			<td><?php echo $row['cname']; ?></td>
		</tr>
<?php 
 }?>
	</table>
</body>
</html>