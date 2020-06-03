<?php
session_start();
include_once "connection.php";
$lid=$_SESSION["custid"];
$date=date("Y-m-d");
$sum=0;
$sql = mysqli_query($conn,"select * from cart");
if(!$sql)
{
echo ("not sucess");
}
else
{
	while($row = mysqli_fetch_assoc($sql))
	{
 		$id = $row["book_id"];
 		$sql2 = mysqli_query($conn,"select * from book where id='$id';");
		$row1 = mysqli_fetch_assoc($sql2);
  		$sum = $sum+$row1["price"];
  	}
 }
$sql="insert into bill values (NULL,'$lid','$sum','$date');";
	$result=mysqli_query($conn,$sql);
	header("Location:bill.php");
?>