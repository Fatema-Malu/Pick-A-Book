<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <style>
    body{
      background-color:#ccffcc;
    }
    ul{
  float: right;
  list-style: none;
  margin-top: 4px;
}
ul li{
  display: inline-block;

}
ul li a{
  text-decoration: none;
  color: black;
  padding: 5px 20px;
  border: 1px solid transparent;
  transition: 0.6s ease;
  font-size: 24px;
}
ul li a:hover{
  background-color: #000;
  color: #fff;
}
ul li.active a{
  background-color: #000;
  color: #fff;
}
.button {
         background-color: black;
         border: none;
         color: white;
         padding: 15px 30px;
         text-align: center;
         text-decoration: none;
         display: inline-block;
         font-size: 18px;
         margin: 4px 2px;
         cursor: pointer;
         }

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  font-family: arial;
}
.column{
  float:left;
  width:30%;
  padding: 0 10px;
}
.price {
  color: black;
  font-size: 20px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
  <header>
    <div class="main">
      <ul>
        <li class="active"><a href="#">My Dashboard</a></li>
        <li><a href="tsearch.php">Search</a></li>
        <li><a href="cart1.php">Cart</a></li>
        <li><a href="logout.php">Logout</a></li> 
      </ul>
    </div>
  </header>
  <div class="row">
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
  $sql1 = mysqli_query($conn,"select * from book;");
              if(!$sql1)
              {
                echo "Error".mysqli_error($sql);
              }
              else
              {
                while($row = mysqli_fetch_assoc($sql1))
                {
                echo '<br><div class="column"><div class="card"><img src="/minipro/bookimgs/'.$row['book_img'].'"style="width:50%; height:60%;"><h3>'.strtoupper($row['title']).'</h3><p> '.$row['author'].'</p> <p>Rating : '.$row['rating'].'</p> 
                <p class="price">RS '.$row['price'].'</p><p>Quantity: '.$row['quantity'].'</p><p>
<a href="cart.php?id1='.$row['id'].'" class="button">Add to cart</a></p></div></div>';  
                }
              }
}
              
            ?>
          </div>

</body>
</html>
