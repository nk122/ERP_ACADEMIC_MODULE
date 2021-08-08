<?php


session_start();

if(!isset($_SESSION['username'])){
	
	header('location:login.php');
}



?>




<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type='text/javascript' src='js/bootstrap.js'></script>
 <script type='text/javascript' src='js/bootstrap.min.js'></script>
 <script type='text/javascript' src='js/jquery.js'></script>
 
 <link rel="stylesheet" href="css/bootstrap.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 
 <!--sds-->
 <link href="./iit/ams_menu.css" type="text/css" rel="stylesheet">
 <link href="./iit/base.css" type="text/css" rel="stylesheet">
 <link href="./iit/Buttons.css" type="text/css" rel="stylesheet">
 <link href="./iit/ct100.css" type="text/css" rel="stylesheet">
 <link href="./iit/MainModalDialog.css" type="text/css" rel="stylesheet">
 <!--fdf-->
 <link href="css1/main.css" rel="stylesheet" media="all">
  <link href="css/animate.css" rel="stylesheet" media="all">
    <title>ERP-Academic Module</title>
	
	
	<style>
	
	body {
	 
  
	 background-color:#f8f9fa;
    font-family: 'Open Sans', sans-serif;
}

  .btn{
  
  color: #0c0c0c;
  
  background-color: #d2d5d8;
  border-color:black;
  }
  
  
  

	</style>
	
	
	
	
	
	
	
	
	
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
      </li>
      
    </ul>
    <span class="navbar-text" style="font-size: xx-large;">
Admission 2020
    </span>
  </div>
</nav>

<nav aria-label="breadcrumb"  style="    background-color: #9E9E9E !important;">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home11.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Academic</a></li>
    <li class="breadcrumb-item active" aria-current="page">Admission</li>
	  

  </ol>

</nav>



<div >
 
  <div class="card-body" style="
    margin-top: -30px;
">
    <center><h1 ><strong>Personal Details</strong> </h1>
	
	
	<hr>
	</center>
    
	
	<div class="col-md-8 col-md-offset-2" >
	
	<br/>
	
	<form  action="action1.php" method="post" enctype="multipart/form-data">
	
  <div class="form-row">
    <div class="row">
    
	<div class="col-md-6">
	 <label for="inputEmail4">Programme Applied For:</label>
  <select    class="custom-select" name="program" >
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
	<br/><br/>
	
	 <label for="inputEmail4">First Name</label>
       <input  type="text" class="form-control" name= "fname" required >
	<br/>
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" required  >
	  	<br/>
      <label for="inputEmail4">Nationality</label>
      <input type="text" class="form-control" name="nationality" required  >
    
		<br/>
      <label for="inputEmail4">Father's Name</label>
      <input type="text" class="form-control" name="father"  required >
		<br/>
      <label for="inputEmail4">Date of Birth</label>
      <input type="text" class="form-control" name="dob"  required >
	
	
	
	
	

    </div>
	
    <div class="col-md-6" style="margin-top: 8px;">
	<!--add-->
	<br/>
	
    <p>Upload Passport Size Photo:</p>
    <div class="custom-file mb-3">
      <input type="file"  name="image" class="custom-file-input" >
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
	
	 <label for="inputEmail4" style="margin-top:20px;">Last Name</label>
      <input type="text" class="form-control" name= "lname" required >
	  	<br/>
      <label for="inputEmail4">Mobile Number</label>
      <input type="text"" class="form-control" name="mobile" required >
	  	<br/>
          <label for="inputEmail4">Category</label>
  <select class="custom-select" name="category" required >
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
  
<br/>
<br/>
          <label for="inputEmail4">Religion</label>
  <select class="custom-select" name="religion" required >
    <option selected>Choose...</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
    <option value="Muslim">Muslim</option>
  </select>
  
  <br/>
  <br/>
          <label for="inputEmail4">Gender</label>
  <select class="custom-select" name="gender" required >
    <option selected>Choose...</option>
    <option value="M">Male</option>
    <option value="F">Female</option>
    
  </select>
			 
			 
		 
			 
			 
			 
			 
			 
			 
			 
    </div>
	
	<button type="submit" class="btn btn-default" style="margin-top:20px; margin-left:45%; ">Next</button>	
  </div>
  

  </div> 
   
</form>


	
  </div>

 
  </div>


<script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>