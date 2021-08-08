<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$name=$_POST['user'];
$error = "Username Already Taken";
$pass= $_POST['password'];

$s="select * from usertable where name = '$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num ==1){
	
	
		$_SESSION["error1"] = $error;
    header("location: login.php");
	
	
}else{
	
	
	$reg="insert into usertable(name,password) values  ('$name','$pass')";
	
	mysqli_query($con,$reg);
	echo "<script>alert('Username successfully created');</script>";
	
	
}




?>