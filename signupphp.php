<?php
include "connect.php";
$username=$_POST['username'];
	$fname=$_POST['fname'];

$lname=$_POST['lname'];
$email=$_POST['email'];


$mob=$_POST['mob'];
$username=$_POST['username'];
$password=$_POST['password'];
	$query=mysqli_query($con,"insert into login_details values ('$username','$password','$fname','$lname','$mob','$email')") or die(mysqli_error($con));
	echo "<br>";
	if($query)
		echo "values inserted successfully";
	else
		echo "error";

?>