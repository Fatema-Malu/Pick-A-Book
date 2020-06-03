<?php
include_once "connection.php";



	$id=$_GET['id1'];
	$s="select * from cart where book_id='$id';";
	$r9=mysqli_query($conn,$s);
	$resultcheck=mysqli_num_rows($r9);
	if(!$resultcheck){
		$s="select price from book where id='$id';";
	$r=mysqli_query($conn,$s);
	if(mysqli_num_rows($r)>0){
		while ($r=mysqli_fetch_assoc($r)) {
			$price=$r['price'];

			$sql="insert into cart values ('$id','$price');";
	        $result=mysqli_query($conn,$sql);
	        header("Location:userdashboard.php");
		}
	}
	}
	else
	{
		header("Location:userdashboard.php?cannot add same book twice ");
	}

	

	
	




?>