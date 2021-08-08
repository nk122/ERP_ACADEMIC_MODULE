<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$user=$_SESSION['username'];
$program=$_POST['program'];

$fname= $_POST['fname'];
$target0="upload_photo/".basename($_FILES['image']['name']);
$image1=$_FILES['image']['name'];
$e= $_POST['email'];
$n= $_POST['nationality'];
$f= $_POST['father'];
$dob= $_POST['dob'];

$lname= $_POST['lname'];
$m= $_POST['mobile'];
$c= $_POST['category'];
$r= $_POST['religion'];
$g= $_POST['gender'];









$s="insert into student_table(username,program,last_name,first_name,email,number,nationality,category,religion,father,dob,gender,photo) values  ('$user','$program','$lname','$fname','$e','$m','$n','$c','$r','$f','$dob','$g','$image1')";

mysqli_query($con,$s);

$r1=move_uploaded_file($_FILES['image']['tmp_name'],$target0);
header('location:2-educational_details.php');
	





?>