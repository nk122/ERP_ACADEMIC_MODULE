<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');


$a=$_POST['fname'];

$b= $_POST['lastname'];
$c= $_SESSION['username'];
$d= $_POST['begin'];
$e=$_POST['end'];

$f=$_POST['type'];
$g=$_POST['subject'];
$h="Pending";

$s="insert into  leave_table(emp_ID,first_name ,last_name ,	begin_date ,	end_date ,type ,comment ,status ) values  ('$c','$a','$b','$d','$e','$f','$g','$h')";






$rr=mysqli_query($con,$s);

if($rr==1)
{
	echo 'Leave Successfully Applied';
}
else{
	echo 'Consecutive Leave cannot be applied ';
}
	





?>