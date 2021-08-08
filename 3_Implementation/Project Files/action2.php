<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$user=$_SESSION['username'];
$had=$_POST['had'];

$uni= $_POST['uni'];


$cgpa= $_POST['cgpa'];
$year= $_POST['year'];
$xth= $_POST['10th'];
$xb= $_POST['10b'];









$s="update student_table set had='$had',university='$uni',cgpa='$cgpa',year='$year',10th='$xth',10th_board='$xb' where username='$user'";

mysqli_query($con,$s);


header('location:3-address_details.php');
	





?>