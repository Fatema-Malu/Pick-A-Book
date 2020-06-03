<!DOCTYPE>
<html>
<head>
	<style type="text/css">
		body{
			background: lightpink;
			background-image: url("../23.jpg");
			background-repeat: no-repeat;
			background-size: cover;

		}
		h1{
			color: black;
		}
		.content{
			margin-top: 8%;
			margin-left: 40%;
		}
		input[type=text]{
			width:30%;
			height: 5%;
			font-size: 24px;
			
		}
		input[type=submit]{
			width: 10%;
			height: 5%;
			font-size: 22px;
		}
		.input-field {
			width: 30%;
			height: 5%;
			font-size: 24px;
			color: grey;
		}
	</style>
	<title>search</title>
</head>
<body>
	<center>
		<br><br><h1> Search Books By : </h1>
	</center>
<div class="content">
	<form method="post" action="titlesearch.php" >
	<input type="text" name="name" placeholder="Enter title">
	<input type="submit" name="submit" value="search"><br><br><br>
</form>
<form method="post" action="pricesearch.php">
	<select class="input-field" name="range">
	<option disabled selected value>Select price range</option>
	<option value=1>RS 100-300</option>
	<option value=2>RS 300-700</option>
	<option value=3>Rs 700 & Above</option>
	</select>
	

	<input type="submit" name="submit" value="search"><br><br><br>
</form>
<form method="post" action="catsearch.php">

	<select class="input-field" name="name">
	<option disabled selected value> Select Category</option>
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
		$sql1 = mysqli_query($conn,"select * from category;");
							if(!$sql1)
							{
								echo "Error".mysqli_error($sql);
							}
							else
							{
								while($row = mysqli_fetch_assoc($sql1))
								{
									$cid=$row['cid'];
								$cname=$row['cname'];
								echo '<option value="'.$cid.'">'.$cname.'</option>';	
								}
							}
}
							
						?></select>
	<input type="submit" name="submit" value="search"><br><br><br>
</form>
	
</div>

</body>
</html>