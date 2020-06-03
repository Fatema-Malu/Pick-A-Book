<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Category</title>
	<link rel="stylesheet" type="text/css" href="category.css">

</head>
<script src="script.js"></script>
<body>
	<header>
		<div class="heading">
			<h1>CATEGORY</h1>
		</div>
		<div class="center">
			<form id="fform" method="post">
				<input type="number" name="categoryId" class="cform" placeholder="Category ID" required="Please fill the details" onkeydown="myfunc(event)" pattern="\d{2}" ><br><br>
				<input type="text" name="categoryName" class="cform" placeholder="Category Name" required="Please fill the details" onkeydown="myfunc(event)" ><br><br>
				
				<input type="submit1" class="cform submit1"value="SUBMIT">

			</form>
			
		</div>
		
	</header>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdn.rawgit.com/twbs/bootsrap/v4-dev/dist/js.bootsrap.js"></script>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","pick-a-book") or die (mysql_error());
if(isset($_POST['submit1']))
{
$id=$_POST['categoryId'];

$name=$_POST['categoryName'];

$query="insert into category(Category_Id,Category_Name) values('$id','$name')";
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("signup successfully done!");
location="login.html";
</script>';
}
}
?>