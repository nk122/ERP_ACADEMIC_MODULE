<?php


session_start();

if(!isset($_SESSION['username'])){
	
	header('location:admin.php');
}



?>


<html>

<head>
<title>Home Page</title>

<link  rel="stylesheet " type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!--dynamic-->
	<link rel='stylesheet' type='text/css' href='dynamic/style.css' />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='dynamic/jquery.ba-hashchange.min.js'></script>
    <script type='text/javascript' src='dynamic/dynamicpage.js'></script>
	<script type='text/javascript' src='dynamic/nj.js'></script>
<link rel='stylesheet' type='text/css' href='dynamic/n.css' />
<script type='text/javascript' src='dynamic/nj2.js'></script>
<link rel='stylesheet' type='text/css' href='dynamic/n2.css' />

<script type='text/javascript' src='dynamic/nj3.js'></script>
<link rel='stylesheet' type='text/css' href='dynamic/n3.css' />
	
	<script>
function myFunction() {
  var x = document.getElementById("page-wrap");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}


function myFunction1() {
  var x1 = document.getElementById("page-wrap1");
  if (x1.style.display === "none") {
    x1.style.display = "block";
  } else {
    x1.style.display = "none";
  }
}

function myFunction2() {
  var x2 = document.getElementById("page-wrap2");
  if (x2.style.display === "none") {
    x2.style.display = "block";
  } else {
    x2.style.display = "none";
  }
}
function myFunction3() {
  var x3 = document.getElementById("page-wrap3");
  if (x3.style.display === "none") {
    x3.style.display = "block";
  } else {
    x3.style.display = "none";
  }
}


</script>
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

#page-wrap{
  
  width:auto;
  display:none;
 overflow-x: overlay ! important;
  overflow-y:hidden;
}
#page-wrap1{
  
  width:auto;
  display:none;
 overflow-x: overlay ! important;
  overflow-y:hidden;
}

#page-wrap2{
  
  width:auto;
  display:none;
 overflow-x: overlay ! important;
  overflow-y:hidden;
}


#page-wrap3{
  
  width:auto;
  display:none;
 overflow-x: overlay ! important;
  overflow-y:hidden;
}






#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
table{
		  
	width:100%;
	color:black;
	background-color:white;
	padding:5px;
	cell-padding:2px;
	 border: 2px solid black;
}

	}
	th,td,t{
		background-color:grey;
		border: 2px solid black;
	}
	.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

</style>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:10;">
  <a class="navbar-brand" href="#" style="font-size: x-large;" >IIT-ERP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
       
      </li>
      <li class="nav-item">
       
		<a href="admin_logout.php">Log Out</a>
      </li>
      
    </ul>
	
    <span class="navbar-text" style="font-size: xx-large;">
Welcome(Admin) <?php echo $_SESSION['username'];   ?>

    </span>
	
  </div>
</nav>


<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:10%;height:100% !important; z-index:9; overflow: hidden; margin-top: -80px;">
  <h3 class="w3-bar-item" style="margin-top:80px;">Admin Dashboard</h3>
  <button style= "margin-left:20px;padding:5px; z-index:9999; width:70%;"   onclick="myFunction()">View Data</button>

 <button style= "margin-left:20px;padding:5px; z-index:9999; margin-top:5px;" onclick="myFunction3()"   >Write Changes</button>
 <button style= "margin-left:20px;padding:5px; z-index:9999; margin-top:5px;" onclick="myFunction1()" > Create Course</button>
 <button style= "margin-left:20px;padding:5px; z-index:9999; margin-top:5px;" onclick="myFunction2()"  > View  Requests</button>
</div>
<div style="margin-left:10%">
<div class="w3-container w3-teal">
  
  
               
</div>


<div class="w3-container" style=" z-index:-99999999;">
 

	<div id="page-wrap">
      
        <header>
		  <h1>Database</h1>
		
		  <nav>
		      <ul class="group">
		          <li><a href="i123.php">student</a></li>
		          <li><a href="teacher_record.php">Teachers</a></li>
		          <li><a href="course_record.php">Courses</a></li>
		      </ul>
		  </nav>
		</header>
		
		<section id="main-content">
		<div id="guts">
		
		  
		
		  <table id="customers" >
		  
		  <tr>
		  <th colspan="12"><h2>Student Records</h2></th>
		  </tr>
		  <t>
		       <th>Unique Username ID</th> 
		       <th>First Name</th>
			   <th>Last Name</th>
			   <th>Course</th>
			   <th>Email</th>
			   <th>Mobile No.</th>
			 
			   <th>Father Name</th>
			   <th>CGPA</th>
			   <th>Gender</th>
			   <th>Address</th>
			   
			   
		  
		  
		  </t>
		  
		  <?php
		  
		  $conn=mysqli_connect("localhost","root","123","user_registration");
		  if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);  
		  }
		  
		  $sql="SELECT username,  first_name,last_name ,program,email,number,father,cgpa,gender,address from student_table";
		  $rr=$conn-> query($sql);
		  if($rr-> num_rows >0){
			  while($row= $rr-> fetch_assoc()){
				  
				  echo "<tr><td>". $row["username"] ."</td><td>". $row["first_name"] ."</td><td>". $row["last_name"] ."</td><td>". $row["program"] ."</td><td>". $row["email"] ."</td><td>" . $row["number"] ."</td><td>". $row["father"] ."</td><td>". $row["gender"] ."</td><td>". $row["cgpa"] ."</td><td>". $row["address"] ."</td></tr>";        
				  
			  }
			  echo " </table>";
		  }
		  else{
			  echo "0 results";
		  }
		  $conn-> close();
		  ?>
		  
		  
		 </table>
		  
		  
		  
		  
		  
		 
		
		</div>
		</section>
		
	</div>
	
	<div id="page-wrap1">

        <header>
		  <h1>Create New Course</h1>
		
		 
		</header>
		
		<form  action="actionC.php" method="post" style="    margin-left: 40px;" enctype="multipart/form-data">
	
  <div class="form-row">
    <div class="row">
    
	<div class="col-md-6">
	 <label for="inputEmail4">Department:</label>
  <select    class="custom-select" name="program" >
    <option selected>Choose...</option>
    <option value="CSE">CSE</option>
    <option value="ECE">ECE</option>
    <option value="MEC">MEC</option>
  </select>
	<br/><br/>
	
	 <label for="inputEmail4">Course Name</label>
       <input  type="text" class="form-control" name= "fname" required >
	
    
	<label for="inputEmail4" style="margin-top:20px;">Course ID</label>
      <input type="text" class="form-control" name= "lname" required >
	  	<br/>
	
      <label for="inputEmail4">Credit</label>
      <input type="text" class="form-control" name="email" required  >
	  	<br/>
	
	
	<label for="inputEmail4" style="margin-top:20px;">Syllabus:</label>
      <textarea name="add" rows="5" cols="50">Type here...</textarea>
	<button type="submit" class="button1"  style="margin-top:20px; margin-bottom:15px; padding:10px;   float:left;  ">Create Course</button>

    </div>
	
    <div class="col-md-6" style="margin-top: 8px;">
	<!--add-->
	
	
   
	
	 
     
		 
			 
			 
			 
			 
			 
			 
			 
    </div>
	
		
  </div>
  

  </div> 
   
</form>
		
	</div>

	<div id="page-wrap2">

        <header>
		  <h1>Leave Requested:</h1>
		
		 
		</header>
		<table  id="customers" style="margin-bottom:35px; ">
		  
		  <tr>
		  <th colspan="12"><h2>Leave Database</h2></th>
		  </tr>
		  <t>
		       <th>Leave ID:</th> 
		       <th>Status</th>
			   
			  
			   
			   
			   
		  
		  
		  </t>
		  
		  <?php
		  
		  $conn=mysqli_connect("localhost","root","123","user_registration");
		  $cu=$_SESSION['username'];
		  if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);  
		  }
		  
		  $sql="SELECT emp_ID, status from leave_table        ";
		  $rr=$conn-> query($sql);
		  if($rr-> num_rows >0){
			  while($row= $rr-> fetch_assoc()){
				  
				  echo "<tr><td>". $row["emp_ID"] ."</td><td>". $row["status"] ."</td></tr>";
				  
			  }
			  echo " </table>";
		  }
		  else{
			  echo "0 results";
		  }
		  $conn-> close();
		  ?>
		  
		  
		 </table>
		
		
		<form  action="actionLO.php" method="post" style="    margin-left: 40px;" enctype="multipart/form-data">
	
  <div class="form-row">
    <div class="row">
    
	<div class="col-md-6">
	<label for="inputEmail4"><h3>Leave ID:</h3></label>
       <input  type="text" class="form-control" name= "fname" required >
	
	
	<button type="submit" class="button1"  style="margin-top:20px; margin-bottom:25px; padding:10px;   float:left;  ">Submit</button>

    </div>
	
    <div class="col-md-6" style="margin-top: 8px;">
	<!--add-->
	 <label for="inputEmail4"><h3>Operation:</h3></label>
  <select    class="custom-select" name="operate" >
    <option selected>Choose...</option>
    <option value="APPROVED">APPROVED</option>
    <option value="REJECTED">REJECTED</option>
    
  </select>
	
   
	
	 
     
		 
			 
			 
			 
			 
			 
			 
			 
    </div>
	
		
  </div>
  

  </div> 
   
</form>
		
	</div>
<div id="page-wrap3">

        <header>
		  <h1>Write Changes:</h1>
		
		 
		</header>
		<table  id="customers" style="margin-bottom:35px; ">
		  
		  <tr>
		  <th colspan="12"><h2>Student Database</h2></th>
		  </tr>
		  <t>
		       <th>User ID:</th> 
		       <th>Status</th>
			   
			  
			   
			   
			   
		  
		  
		  </t>
		  
		  <?php
		  
		  $conn=mysqli_connect("localhost","root","123","user_registration");
		  $cu=$_SESSION['username'];
		  if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);  
		  }
		  
		  $sql="SELECT username, dob ,status from student_table        ";
		  $rr=$conn-> query($sql);
		  if($rr-> num_rows >0){
			  while($row= $rr-> fetch_assoc()){
				  
				  echo "<tr><td>". $row["username"] ."</td><td>". $row["status"] ."</td></tr>";
				  
			  }
			  echo " </table>";
		  }
		  else{
			  echo "0 results";
		  }
		  $conn-> close();
		  ?>
		  
		  
		 </table>
		
		
		<form  action="actionWC.php" method="post" style="    margin-left: 40px;" enctype="multipart/form-data">
	
  <div class="form-row">
    <div class="row">
    
	<div class="col-md-6">
	<label for="inputEmail4"><h3>User ID:</h3></label>
       <input  type="text" class="form-control" name= "fname1" required >
	
	
	<button type="submit" class="button1"  style="margin-top:20px; margin-bottom:25px; padding:10px;   float:left;  ">Submit</button>

    </div>
	
    <div class="col-md-6" style="margin-top: 8px;">
	<!--add-->
	 <label for="inputEmail4"><h3>Operation:</h3></label>
  <select    class="custom-select" name="operate1" >
    <option selected>Choose...</option>
    <option value="APPROVED">APPROVED</option>
    <option value="REJECTED">REJECTED</option>
    
  </select>
	
   
	
	 
     
		 
			 
			 
			 
			 
			 
			 
			 
    </div>
	
		
  </div>
  

  </div> 
   
</form>
		
	</div>

</div>
</div>



</body>

</html>