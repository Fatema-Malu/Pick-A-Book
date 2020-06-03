<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
<title>Bill</title>
<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
<style>
button {
    color: black;
    padding: 8px;
    text-align: center;
    font-size: 12px;
border-radius: 2px;
width:10%;
position:absolute;
top:95%;
left:45%;
}

.container {
width:460px;
      padding:16px;
      border:1px solid #ccc;
      background:#fff;
min-height:95%;
 position:absolute;
 left:20%;
 word-wrap: normal
 
 }
table{
 border-collapse: collapse;
 border: 1.5px solid black;
table-layout:fixed;
width :90%;
position:absolute;
top:35%;
}
table tr {
  border-bottom: 0;
}

table tr:last-child {
  border: 1px solid black;
  border-right :0;
  border-left:0;
}

th{
border-collapse: collapse;
border: 1.5px  solid black;
font-family : times new roman;
color:black;
text-align:center;
font-size : 18px;
padding: 15px;
height: 1px;

}
td {
border-collapse: collapse;
border-right: solid 1.5px black;
     border-left: solid 1.5px black;
font-family : times new roman;
color:black;
font-size : 15px;
text-align:center;
padding: 5px;

}

.text{
position:absolute;
top:-1.5%;
left:40%;
font-family : English111 Vivace BT;
color : black;
text-align:center;
}
.text1{
position:absolute;
top:4.5%;
left:35%;
font-family : times new roman;
color : black;
text-align:center;
}
.x
{
position:absolute;
top:16%;
}
.y{
position:absolute;
top:20%;
left:0%;
font-family : times new roman;
color : black;
}
.h{
position:absolute;
top:20%;
right:0%;
font-family : times new roman;
color : black;

}
.z
{
position:absolute;
top:96%;
left:56%;

}
a{
color : black;
}
</style>
<script>
function myFunction() {
window.print();
}
</script>
</head>
<body>
<div class ="container">
<img src='../logo.jpg' width='180' height='80'>
<div class ='text'><h2>Pick-A-Book</h2></div>
<div class ='text1'><p>12th Main Road, 27th Cross,<br>Banashankari II Stage<br>Bangalore-560070</p></div>
<?php
include_once "connection.php";
$lid=$_SESSION["custid"];
$date=date("Y-m-d");
$ct=1;
$sum=0;
$sql = mysqli_query($conn,"select * from customer where cust_id='$lid'");
if(!$sql)
{
//echo ("not sucess");
}
else
{
if(mysqli_num_rows($sql)>=0)
{
while($row = mysqli_fetch_assoc($sql))
{
echo "<div class ='y'><p>&nbsp;Name :".$row['cust_name']."<br>&nbsp;PhoneNo : ".$row['phone']."</p></div>";
}
}
}
$sql1 = mysqli_query($conn,"select * from cart");
if(!$sql1)
{
//echo ("not sucess");
}
else
{
	echo "<table><tr><th>Sno</th><th>Name</th><th>Price</th>";
	while($row = mysqli_fetch_assoc($sql1))
	{
 		$id = $row["book_id"];
  $sql2 = mysqli_query($conn,"select * from book where id='$id';");
  if(!$sql2)
{
//echo ("not sucess");
}
else
{
$sql9="select * from cart;";
$result9=mysqli_query($conn,$sql9);
$resultcheck9=mysqli_num_rows($result9);
if($resultcheck9>0){
$c=0;
while($row9=mysqli_fetch_assoc($result9))
{
  $c++;
  $i=$row9['book_id'];
  $s0="select * from book where id='$i';";
  $r0=mysqli_query($conn,$s0);
  $rc0=mysqli_num_rows($r0);
  if($rc0){
    
    while ($row0=mysqli_fetch_assoc($r0)) {
        
      echo "<tr><td>".$c."</td><td>".$row0['title']."</td><td>".$row0['price']."</td><tr>";
    }
  }

}
}
$sql5="call cost();";
$r5=mysqli_query($conn,$sql5);
$rc5=mysqli_num_rows($r5);
if($rc5>0){
  while ($row5=mysqli_fetch_assoc($r5)) {
    $price=$row5['total'];
?>
<tr><td></td><td>TOTAL AMOUNT</td><td><?php echo($price);?></td></tr>
<?php
  }
}
}
}
}
?>

</table>
<center><button onclick = "myFunction()" >Print</button></center>
<div class = 'z'><a href="logout.php">EXIT</a></div>
</div>
</div>

</body>
</html>