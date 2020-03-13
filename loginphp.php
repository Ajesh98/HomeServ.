<?php
include "connect.php";
session_start();
if(isset($_POST['username']) &&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($con,"select * from login_details where username='$username' and password='$password'") ;
	$row=mysqli_num_rows($query);
	if($row==1)
		{$_SESSION['username']=$username;
		header("location:Homeserv.php");
	}
	else
		{
			$_SESSION['invalid']=1;
		header("location:login.php");
	    }
}
else
		
		{
			$_SESSION['invalid']=1;
		header("location:login.php");
	    }
?>