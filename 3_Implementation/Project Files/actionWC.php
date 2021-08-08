<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');


$id=$_POST['fname1'];

$p= $_POST['operate1'];



$s="update student_table set status='$p' where username='$id'";

mysqli_query($con,$s);


header('location:admin_home.php');
	
echo 'operation written';




?>