<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');


$id=$_POST['fname'];

$p= $_POST['operate'];



$s="update leave_table set status='$p' where emp_ID='$id'";

mysqli_query($con,$s);


header('location:admin_home.php');
	
echo 'operation written';




?>