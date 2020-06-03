<?php
include_once "connection.php";



	$id=$_GET['id'];

	$sql="delete from cart where book_id='$id';";
	$result=mysqli_query($conn,$sql);
	$r=mysqli_query($conn,"select quantity from book where id='$id';");
	$row2=mysqli_fetch_assoc($r);
	$quant=$row2['quantity']+1;
	echo $quant;
	$sql1="update book set quantity=$quant where id='$id';";
	$result1=mysqli_query($conn,$sql1);
	
	header("Location:cart1.php");
	




?>