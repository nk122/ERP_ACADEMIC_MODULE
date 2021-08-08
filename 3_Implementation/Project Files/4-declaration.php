<?php


session_start();

if(!isset($_SESSION['username'])){
	
	header('location:login.php');
}



?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
 
 <link href="./iit/ct100.css" type="text/css" rel="stylesheet">
 
 <!--fdf-->
 <link href="css1/main.css" rel="stylesheet" media="all">
  <link href="css/animate.css" rel="stylesheet" media="all">
    <title>ERP-Academic Module</title>
	
	
	<style>
	
	body{
	 
 
	 background-color:#f8f9fa;
    font-family: 'Open Sans', sans-serif;
        
		}

  .btn{
  
  color: #0c0c0c;
 background-color: #d2d5d8;
  
  border-color:black;
  }
  
 .p{
 
 
 font-size:23px;
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


 <div class="container">
 
 
 <div class="row">
 <div class="container">
 <div class="container"  >

<div class="row">
    
	
	
    
    
<div class="col-md-6" style="margin-top: 8px;">

<center><h1>Upload Documents</h1> <hr> </center>

<form action="action4.php" method="post"  enctype="multipart/form-data">
<div style="padding-top:40px;">
    <p>Upload 10th Class Marksheet:</p>
    <div class="custom-file mb-3">
      <input type="file"  name="image1" class="custom-file-input" >
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    
  <p>Upload 12th Class Marksheet:</p>
    <div class="custom-file mb-3">
      <input type="file"  name="image2" class="custom-file-input"  >
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
  
   <p>Upload Highest Qualification Marksheet:</p>
    <div class="custom-file mb-3">
      <input type="file" name="image3" class="custom-file-input" required   >
      <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
	</div>
	
	<div>
	<h1>Declaration</h1>
	<hr>
	
	</div>
	<div style="border-style: solid;border-width: 1.5px;padding: 6px;margin-top: 12px; box-shadow: 5px 10px #888888;background-color: white;">
	<p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately. In case any of the above information is found to be false or untrue or misleading or misrepresenting, I am aware that I may be held liable for it.</p>
	
	</div>
	
	
    <div style="margin-top:23px;">
      <button type="submit" class="btn btn-primary btn-sm">Confirm and Submit</button>
    </div>
  </form>
</div>







 </div>
 
 
 </div>

 
 </div>
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