<?php

$cust_name=$_POST['name'];
$address=$_POST['add'];
$email=$_POST['email'];
$phone=$_POST['ph'];

$login=$_POST['uname'];
$pass=$_POST['password'];


include_once "connection.php";
$sql="insert into customer  values (NULL,'$cust_name','$address','$email','$phone','$login','$pass');";
$result=mysqli_query($conn,$sql);
if($result){
	header ("Location:../login.html");
	
}
else 
{
	echo mysqli_error($sql);
}
?>