<?php

session_start();

$con= mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$name=$_POST['user'];
$error = "username/password incorrect";
$pass= $_POST['password'];

$s=" select * from admin_table where username = '$name' && password='$pass' "  ;

$result=mysqli_query($con,$s);

$num1=mysqli_num_rows($result);

if(!$num1 == 0){
	
	$_SESSION['username']=$name;
	header('location:admin_home.php');
	
	
}else{
	
	
	$_SESSION["error"] = $error;
    header("location: admin.php");
	
	
	
}

?>