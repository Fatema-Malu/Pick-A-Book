<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
	<title>Book Details</title>
	<link rel="stylesheet" type="text/css" href="c2.css">
	<header>
		<div class="container">
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6 title">Book Details</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
		
	</header>
</head>
<script src="script.js"></script>
<body>
	
<div class="container">
	<div class="row rowh"></div>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			            <form method="post" name="lform" action="inc/book.php">
				<div class="formm-group">
					<label for="Bname">Book Title:</label>
					<input type="text" placeholder="Please Enter Book name" onkeydown="myfunc(event)" name="bname" class="form-control" required="Please fill this first" >
				</div>
				<div class="formm-group">
					<label for="bat">Book Author:</label>
					<input  type="text" onkeydown="myfunc(event)" placeholder="Please Enter Author name" name="bat" class="form-control" required="Please fill all the details">
				</div>
				<div class="formm-group">
					<label for="bimg">Book Image:</label>
					<input  type="file" onkeydown="myfunc(event)" placeholder="Please select image" name="bimg" class="form-control" required="Please fill all the details">
				</div>
				<br>
					<label >Select Category:</label>
					<select class="input-field" name="category">
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
							
						?>
</select>
				<div class="formm-group">
					<label for="price">Price:</label>
					<input  type="number" onkeydown="myfunc(event)" placeholder="Please Enter price" name="bprice" class="form-control" required="Please fill all the details">
				</div>
				<div class="formm-group">
					<label for="rating">Rating:</label>
					<input  type="number" maxlength="1" minlenght="1" onkeydown="myfunc(event)" placeholder="Please Enter Rating" name="brating" class="form-control" required="Please fill all the details">
				</div>
				<div class="formm-group">
					<label for="rating">Quantity:</label>
					<input  type="number" onkeydown="myfunc(event)" placeholder="Please Enter Quantity" name="bquant" class="form-control" required="Please fill all the details">
				</div>

				<div>
					<input type="submit" name="submit5" tabindex="-1" class="btn btn-success btn-submit btns" value="SUBMIT">
				</div>
			</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/twbs/bootsrap/v4-dev/dist/js.bootsrap.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
</body>
</html>