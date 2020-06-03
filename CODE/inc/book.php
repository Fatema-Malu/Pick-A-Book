<?php

$bname=$_POST['bname'];

$bat=$_POST['bat'];
$bimg=$_POST['bimg'];
$bprice=$_POST['bprice'];
$brating=$_POST['brating'];
$cate_id=$_POST['category'];
$bquant=$_POST['bquant'];



include_once "connection.php";
$sql="insert into book values (NULL,'$bname','$bat','$bprice','$brating','$bimg','$cate_id','$bquant');";
$result=mysqli_query($conn,$sql);
if($result){
	header ("Location:../bookdetail.php");
}
?>