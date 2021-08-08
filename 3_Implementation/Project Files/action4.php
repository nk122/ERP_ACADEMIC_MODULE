<?php

session_start();

$con=mysqli_connect('localhost','root','123');

mysqli_select_db($con,'user_registration');

$user=$_SESSION['username'];


$target1="uploads_10th/".basename($_FILES['image1']['name']);
$target2="upload_12th/".basename($_FILES['image2']['name']);
$target3="upload_h/".basename($_FILES['image3']['name']);


$image1=$_FILES['image1']['name'];
$image2=$_FILES['image2']['name'];
$image3=$_FILES['image3']['name'];



$s="update student_table set 10th_sheet='$image1' , 12th_sheet='$image2' , h_sheet='$image3'  where username='$user'";

$r=mysqli_query($con,$s);

$r1=move_uploaded_file($_FILES['image1']['tmp_name'],$target1);
$r2=move_uploaded_file($_FILES['image2']['tmp_name'],$target2);
$r3=move_uploaded_file($_FILES['image3']['tmp_name'],$target3);


if($r1 ==1 && $r2==1 && $r3==1){
	header('location:home11.php');
}
	else{
		echo "Failed";
	}





?>