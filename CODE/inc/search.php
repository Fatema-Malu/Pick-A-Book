<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Search</title>
  <style>
    .logo img{
  float: left;
  margin-top: 20px; 
  width: 200px;
  height: auto;
}
    ul{
  float: right;
  list-style: none;
  margin-top: 25px;
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
  float:left;
  width: 20%;
  height:%;
  margin-top: 9%;
  margin-left:9%;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}
.department{
  margin-top: 1%;
  width:auto;
  height:auto;
  padding:10px;
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
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
</head>
<body>
  <header>
    
  </header>
  <form method ="POST" action=".....">
    <center><h3>SEARCH BY</h3></center>

<label for="name"><b>TITLE :</b></label>
    <input type="text" placeholder="" name="name" required>

    <div class="clearfix">
      <button type="submit" class="signupbtn">SUBMIT</button>  
    </div>
    
</form>
  <div class="department">

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
                echo '<div class="card"><img src="/minipro/bookimgs/'.$row['book_img'].'"style="width:50%; height:60%;"><h3>'.strtoupper($row['title']).'</h3><p> '.$row['author'].'</p> <p>Rating : '.$row['rating'].'</p> 
                <p class="price">RS '.$row['price'].'</p><p>
<a href="cart.php?id1='.$row['id'].'" class="button">Add to cart</a></p></div>';  
                }
              }
}
              
            ?>
          </div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
