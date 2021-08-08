<?php


session_start();

if(!isset($_SESSION['username'])){
	
	header('location:login.php');
}



?>

<html>

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Dynamic Page | Home</title>
	
	<link rel='stylesheet' type='text/css' href='dynamic/style.css' />
	
	<!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js'></script>
    <script type='text/javascript' src='dynamic/jquery.ba-hashchange.min.js'></script>
    <script type='text/javascript' src='dynamic/dynamicpage.js'></script>
	
	<style>
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
	
	</style>
	
	
</head>

<body>



	<div id="page-wrap">

        <header>
		  <h1>Admission Database</h1>
		
		  
		</header>
		
		<section id="main-content">
		<div id="guts">
		
		  
		
		  <table  id="customers">
		  
		  <tr>
		  <th colspan="12"><h2>Application Status</h2></th>
		  </tr>
		  <t>
		       <th>Application ID</th> 
		       <th>Status</th>
			   
			  
			   
			   
			   
		  
		  
		  </t>
		  
		  <?php
		  
		  $conn=mysqli_connect("localhost","root","123","user_registration");
		  $cu=$_SESSION['username'];
		  if($conn-> connect_error){
			die("Connection failed:".$conn-> connect_error);  
		  }
		  
		  $sql="SELECT emp_ID, status from leave_table WHERE emp_ID='$cu'          ";
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
		  
		  
		  
		  
		  
		 
		
		</div>
		</section>
		
	</div>
	
	

	

</body>

</html>