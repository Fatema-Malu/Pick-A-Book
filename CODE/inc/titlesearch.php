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
		By Title
	</title>
</head>
<body>


<?php
$title=$_POST['name'];
include_once"connection.php";
$sql="select * from book where title like '$title';";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0){
	while($row=mysqli_fetch_assoc($result)){


		echo '<div class="card"><img src="/minipro/bookimgs/'.$row['book_img'].'"style="width:23%; height:30%;"><h2>'.strtoupper($row['title']).'</h2><h2><p> '.$row['author'].'</h2></p><h2> <p>Rating : '.$row['rating'].'</h2></p> 
               <h2> <p class="price">RS '.$row['price'].'</h2></p> <p><h2><a href="cart.php?id1='.$row['id'].'" class="button">Add to cart</a></h2></p></div>';  

	}
}

?>
</body>
</html>