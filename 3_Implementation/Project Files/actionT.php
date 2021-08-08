<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$user=$_SESSION['username'];
$program=$_POST['program'];

$fname= $_POST['fname'];
$e= $_POST['email'];
$lname= $_POST['lname'];
$m= $_POST['mobile'];
$g= $_POST['gender'];
$add=$_POST['add'];




$s="insert into teachers_table(emp_ID,first_name,last_name,Dept,email,mobile,address,gender) values  ('$user','$fname','$lname','$program','$e','$m','$add','$g')";






mysqli_query($con,$s);


header('location:teacher_home.php');
	





?>