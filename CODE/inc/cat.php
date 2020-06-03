<?php

$cname=$_POST['cname'];

include_once "connection.php";
$sql="insert into category(cid,cname) values (NULL,'$cname');";
$result=mysqli_query($conn,$sql);
if($result){
	header("Location:../admindashboard.html");
}
?>