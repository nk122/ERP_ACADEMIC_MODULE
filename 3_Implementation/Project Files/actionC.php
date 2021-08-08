<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');


$program=$_POST['program'];

$Cname= $_POST['fname'];
$cre= $_POST['email'];
$Cid= $_POST['lname'];
$sy=$_POST['add'];




$s="insert into  course(ID,name,dept,credit,syllabus) values  ('$Cid','$Cname','$program','$cre','$sy')";






mysqli_query($con,$s);


header('location:admin_home.php');
	





?>