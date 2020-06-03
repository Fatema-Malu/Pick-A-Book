<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pick-a-book";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else
{
	echo "hi";
}

?>