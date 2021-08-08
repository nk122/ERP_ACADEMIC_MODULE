<?php
session_start();
?>

<html>



<head>

<title>Login Page</title>

<link  rel="stylesheet " type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

<style>

body{
	background:linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(i.jpg);
	background-size:cover;
	background-position:center;
		overflow:hidden;
}

.login-box{
	
	max-width:700px;
	float:none;
	margin:150px auto;
	
	
}
.login-left{
	background:rgba(211,211,211,0.5);
	padding:30px;
	
	margin: auto;
  width: 60%;
  border: 3px solid grey;
    box-shadow: 5px 10px;
}

.login-right{
	background:#fff;
	padding:30px;
}
.form-control{
	background-color:transparent !important;
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
<button class="button button1 animate__animated animate__pulse animate__repeat-2" style=" animation: pulse 3s; float:right;
  animation-iteration-count: infinite;" onClick="location.href='admin.php'"  >Admin Acess</button>
  <button class="button button1 animate__animated animate__pulse animate__repeat-2" style=" animation: pulse 3s; float:left;
  animation-iteration-count: infinite;" onClick="location.href='login.php'" style="" >Student Module</button>
<div class="container" style=" animation: pulse 3s;
  animation-iteration-count: infinite;">
<div class="login-box">
<center><h2>Teachers Module</h2></center>
<div class="row">

<div class=" login-left">

<h2>Login Here</h2>

<form action="teacher_validation.php" method="post">
<div  class="form-group"  >

<label>Employee ID</label>

<input type="text" name="user" class="form-control" required  >
	
</div>

<div  class="form-group"  >

<label>Password</label>

<input type="password" name="password" class="form-control" required  >
	
</div>

<button type="submit" class="btn btn-primary">Login</button>
<?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo '<span style="color:red;">username/password incorrect</span>';
                    }
                ?>  
</form>



</div>


</div>

</div>


</div>


</body>












</html>

<?php
    unset($_SESSION["error"]);
	  unset($_SESSION["error1"]);
?>