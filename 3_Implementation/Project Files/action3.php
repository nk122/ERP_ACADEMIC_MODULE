<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$user=$_SESSION['username'];
$add=$_POST['add'];

$city= $_POST['city'];


$state= $_POST['state'];
$pin= $_POST['pin'];
$coun= $_POST['coun'];










$s="update student_table set address='$add',city='$city',state='$state',pincode='$pin',country='$coun' where username='$user'";

mysqli_query($con,$s);


header('location:4-declaration.php');
	





?>