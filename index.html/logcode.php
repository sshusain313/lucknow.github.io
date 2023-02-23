<?php
$email=$_POST['email'];
$password=$_POST['pass'];
include("connection.php");
$query="select * from user where email='$email' and password='$pass'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
	header("Location:profile.php");
}
else
{
    header("Location:login.php");
}	
?>