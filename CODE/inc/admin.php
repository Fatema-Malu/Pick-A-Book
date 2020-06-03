<?php
include_once "connection.php";

if(isset($_POST['aid'])){

	$aid=$_POST['aid'];
	$pass=$_POST['pass'];
	$sql="select * from admin where admin='".$aid."' AND password='".$pass."'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1){
		header("Location:../admindashboard.html");
	}
	else{
		echo "unsuccessful";
		exit();
	}
}


?>