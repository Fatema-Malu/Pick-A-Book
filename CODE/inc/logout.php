<?php
include_once "connection.php";
	$sql="delete from cart;";
	$result=mysqli_query($conn,$sql);
	
	header("Location:../index.html");
	




?>