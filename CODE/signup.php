
<?<?php 
include_once 'includes/dbh.php'
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="signup.css">

  <title>Sign Up</title>
<div class="heading">Sign Up</div>

</head>
<script src="script.js"></script>
<body>
	
	<div class="container">
		<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			
            <form METHOD="POST" name="lform" class="fform" >
				<div class="formm-group">
					<label for="name">Name:</label>
					<input type="text" placeholder="Please Enter full name"  name="name"onkeydown="myfunc(event)" class="form-control" required="Please fill all the details" >
				</div>
				<div class="formm-group">
					<label for="add">Address:</label>
					<input  type="text"  placeholder="Please Enter Address" name="add" onkeydown="myfunc(event)" class="form-control" required="Please fill all the details">
				</div>
				<div class="formm-group">
					<label for="email">Email ID:</label>
					<input type="Email" placeholder="Please Enter Email ID"  name="email" onkeydown="myfunc(event)" class="form-control" required="Please fill all the details" >
				</div>
				<div class="formm-group">
					<label for="uname">Username:</label>
					<input  type="text"  placeholder="Please Enter Username of your choice" name="uname" onkeydown="myfunc(event)" class="form-control" required="Please fill all the details">
				</div>
				<div class="formm-group">
					<label for="pass">Password:</label>
					<input type="Password" placeholder="Please Enter 8 character password"  name="pass" onkeydown="myfunc(event)"class="form-control" required="Please fill all the details" >
				</div>
				<div class="formm-group">
					<label for="ph">Phone Number:</label>
					<input  type="number"  placeholder="Please Enter your phone number" name="ph"onkeydown="myfunc(event)" class="form-control" required="Please fill all the details" pattern="\d{10}">
				</div>
				
				<div>
					<input type="submit" name="submit5" onclick="return check(this.form)"  class="btn btn-success btn-submit btns" value="SUBMIT">
				</div>
			</form>
			
		</div>
		<div class="col-sm-3"></div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdn.rawgit.com/twbs/bootsrap/v4-dev/dist/js.bootsrap.js"></script>

</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","pick-a-book") or die (mysql_error());
if(isset($_POST['submit5']))
{
$n=$_POST['name'];

$a=$_POST['add'];

$e=$_POST['email'];

$u=$_POST['uname'];

$p=$_POST['pass'];

$pn=$_POST['ph'];

$query="insert into signup(Name,Address,EmailId,Username,Password,PhoneNo) values('$n','$a','$e','$u','$p','$pn')";
if(mysqli_query($conn,$query))
{
echo '<script language="javascript">
alert("signup successfully done!");
location="login.html";
</script>';
}
}
?>

