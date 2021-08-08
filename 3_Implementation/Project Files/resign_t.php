<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body style="overflow-y:hidden;">

<h2>Resignation Form</h2>
<p>Kindly fill the form to apply for resignation and submit atleast 15 days before resigning date.</p>

<div class="container">
  <form action="actionR.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
	   <div class="row">
      <div class="col-25">
        <label for="lname">Employee ID:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="id" placeholder="emp_00X..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Joining date:</label>
      </div>
      <div class="col-25">
        <input type="text" id="lname" name="begin" placeholder="dd/mm/yyyy..">
      </div>
	  <div class="col-25" style="margin-left:50px;">
        <label for="lname">Last Working date:</label>
      </div>
      <div class="col-25" style="margin-left:-50px;">
        <input type="text" id="lname" name="end" placeholder="dd/mm/yyyy..">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="subject">Comment:</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>