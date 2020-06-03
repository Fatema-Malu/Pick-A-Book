
<html>
<body>

	<table>
		<tr>
			<th>title</th>
			<th>id</th>
			<th>price</th>
			<th>author</th>
			<th>rating</th>
			
		</tr>
	<?php
include_once "connection.php";
$sql="select * from book;";
$r=mysqli_query($conn,$sql);
$rc=mysqli_num_rows($r);
while($row=mysqli_fetch_assoc($r))
{
	?>
	

		<tr>
			<td><?php echo $row['title'];  ?></td>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['price']; ?></td>
			<td><?php echo $row['author'];  ?></td>
			<td><?php echo $row['rating']; ?></td>
			
		</tr>
<?php 
 }?>
	</table>
</body>
</html>