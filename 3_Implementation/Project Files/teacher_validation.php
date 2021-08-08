<?php

session_start();

$con= mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$name=$_POST['user'];
$error = "username/password incorrect";
$pass= $_POST['password'];

$s=" select * from emp_table where emp_ID = '$name' && password='$pass' "  ;

$result=mysqli_query($con,$s);

$num1=mysqli_num_rows($result);

if(!$num1 == 0){
	
	$_SESSION['username']=$name;
	header('location:teacher_home.php');
	
	
}else{
	
	
	$_SESSION["error"] = $error;
    header("location:teacher.php");
	
	
	
}

?>