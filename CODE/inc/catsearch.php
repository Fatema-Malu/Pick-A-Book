<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-image: url("../37.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<title>
		By Caregory
	</title>
</head>
<body>

<?php
$name=$_POST['name'];
//echo "$name";
include_once"connection.php";

//$sql="select * from category where cid='$name';";
//$result=mysqli_query($conn,$sql);
//$resultcheck=mysqli_num_rows($result);
//if($resultcheck>0){
	//while($row=mysqli_fetch_assoc($result))
	//{
		//$cid=$row['cid'];
		$s="select * from book where cate_id='$name';"; 
		$r=mysqli_query($conn,$s);
		$rc=mysqli_num_rows($r);
		if($rc>0){
			while ($row2=mysqli_fetch_assoc($r)) {
					echo '<div class="card"><img src="/minipro/bookimgs/'.$row2['book_img'].'"style="width:23%; height:30%;"><h2>'.strtoupper($row2['title']).'</h2><p><h2> '.$row2['author'].'</h2></p> <p><h2>Rating : '.$row2['rating'].'</h2></p> 
                <p class="price"><h2>RS '.$row2['price'].'</h2></p><p><h2>
<a href="cart.php?id1='.$row2['id'].'" class="button">Add to cart</a></h2></p></div>';  
			}
		}
	//}
 // }
?>
</body>
</html>