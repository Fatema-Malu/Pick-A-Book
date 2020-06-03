<?php
session_start();
include_once "connection.php";

if(isset($_POST['lid'])){

	$lid=$_POST['lid'];
	$pass=$_POST['pass'];
	$sql="select cust_id from customer where login='".$lid."' AND password='".$pass."'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['custid']=$row['cust_id'];
		header("Location:userdashboard.php");
	}
	else{
		echo "unsuccessful";
		exit();
	}
}


?>