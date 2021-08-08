<?php


session_start();

if(!isset($_SESSION['username'])){
	
	header('location:login.php');
}



?>


<html>

<head>
<title>Home Page</title>

<link  rel="stylesheet " type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

body{
	background:linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(i.jpg);
	background-size:cover;
	background-position:center;
}

.login-box{
	
	max-width:700px;
	float:none;
	margin:150px auto;
	
	
}
.login-left{
	background:rgba(211,211,211,0.5);
	padding:30px;
}

.login-right{
	background:#fff;
	padding:30px;
}
.form-control{
	background-color:transparent !important;
}


</style>

</head>
<body style="overflow-y:hidden;">


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:10;">
  <a class="navbar-brand" href="#" style="font-size: x-large;" >IIT-ERP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-size: large;"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-size: large;"></a>
		<a href="logout.php">Log Out</a>
      </li>
      
    </ul>
	
    <span class="navbar-text" style="font-size: xx-large;">
Welcome <?php echo $_SESSION['username'];   ?>
    </span>
  </div>
</nav>


<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25% ; height:100% !important; z-index:9; overflow: hidden; margin-top: -80px;">
  <h3 class="w3-bar-item" style="margin-top:80px;">My Dashboard</h3>
  <a href="demo.php" class="w3-bar-item w3-button" target="iframe_a">Home</a>
  <a href="1-personal_details.php" class="w3-bar-item w3-button">Apply for Admission</a>
  <a href="student_form_status.php" class="w3-bar-item w3-button" target="iframe_a">Check Application Status</a>
  <a href="course_general.php" class="w3-bar-item w3-button" target="iframe_a">View Courses</a>
    <a href="leave.php" class="w3-bar-item w3-button" target="iframe_a" >Apply for Leave</a>

  <a href="leave_status.php" class="w3-bar-item w3-button" target="iframe_a" >Check Leave Status</a>
</div>
<div style="margin-left:25%">
<div class="w3-container w3-teal">
  
  
               
</div>


<div class="w3-container">

<iframe height="100%" width="100%" src="demo.php" name="iframe_a"  style="overflow-y:hidden ! important;"></iframe>
</div>

</div>
</body>

</html>