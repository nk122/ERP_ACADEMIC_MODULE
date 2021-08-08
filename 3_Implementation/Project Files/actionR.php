<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');


$a=$_POST['fname'];

$b= $_POST['lastname'];
$c= $_POST['id'];
$d= $_POST['begin'];
$e=$_POST['end'];

$g=$_POST['subject'];
$h="Pending";

$s="insert into  resignation(emp_ID,first_name ,last_name ,	start ,	end ,comment ,status ) values  ('$c','$a','$b','$d','$e','$g','$h')";






$rr=mysqli_query($con,$s);

if($rr==1)
{
	echo 'Resignation Successfully Applied';
}
else{
	echo 'Error Ocurred';
}
	





?>