<!DOCTYPE html>
<html>
<head>
<title>Cart</title>
<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: lightblue;

}

table{
border-collapse : collapse;
width :90%;
position:absolute;
top:28%;
left:5%;
right:5%;
}
th{
font-family : times new roman;
color:white;
border: 1.5px solid #ddd;
border-color : darkblue;
text-align:center;
font-size : 20px;
padding: 15px;
background-color: maroon;

}
td {
font-family : times new roman;
color:black;
border: 1.5px solid #ddd;
border-color : darkblue;
font-size : 18px;
text-align:center;
padding: 15px;
}
ul li a{
  text-decoration: none;
  color: black;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.6s ease;
  font-size: 25px;
}
ul li a:hover{
  background-color: #000;
  color: #fff;
}
ul{
  float: right;
  list-style: none;
  margin-top: 2px;
}
ul li{
  display: inline-block;

}

</style>
</head>
<body >

<div class="main">
  <center><br><h1>My Cart</h1></center>

      <ul>
        <li><a href="checkout.php">Check out</a></li>
        <li><a href="logout.php">Logout</a></li>
         
      </ul>
    </div>
<center><table>


<?php
$servername   = "localhost";
$database = "dbms";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_Connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else {
$sql = mysqli_query($conn,"select * from cart");
if(mysqli_num_rows($sql)>0)
{
echo"<tr>
<th>BOOK NAME</th><th>AUTHOR</th><th>PRICE</th><th>DELETE</th>
</tr>";
while($row = mysqli_fetch_assoc($sql))
{
  $id = $row['book_id'];
  $sql1 = mysqli_query($conn,"select * from book where id='$id';");
if(mysqli_num_rows($sql1)>=0)
{
while($row1 = mysqli_fetch_assoc($sql1))
{  
  echo "<tr><td>" .$row1['title']."</td><td>".$row1['author']."</td><td>".$row1['price']."</td><td><a href='next.php?id=$id'><img src='../bookimgs/delete1.png' width='40' height='40' border='0' align= 'middle'></a></td></tr>";
}
}
}
echo "</table></center>";  
}
else
{
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><img src='../bookimgs/sad.gif' width='150' height='150' border='0' align= 'middle'><br><center><h2 id = 'ava'>NO ITEMS IN THE CART</h2></center>";
}
}
?>
</div>
</body>
</html>