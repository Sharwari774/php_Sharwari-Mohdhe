<?php

include("connection.php");

if(isset($_POST["notice_btn"])){

$notice = $_POST["notice"];
$qry = "INSERT INTO `notice`(`notice`) VALUES ('$notice') ";

$result = mysqli_query($connect,$qry);

if($result)
{
	?> <script> alert("Notice added Successfully");</script> <?php 
}
else
{
	?> <script> alert("Something went wrong");</script> <?php 
}

}








?>




<!DOCTYPE html>
<html>
<head>
	<title> Admin Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="css/style.css" rel="stylesheet">


</head>
<body>
<h2 style="text-align: center;"> Welcome Admin</h2>
<br>
<br>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form method="POST">
					<div  class="form-group">
						<lable> <h4>Add Notice</h4></lable>
						<textarea name="notice" placeholder="Enter notice here.." class="form-control"> </textarea>
					</div>
					<div  class="form-group">
						<button type="submit" name="notice_btn" class="btn btn-info" class="form-control"> Add </button>
				</form>
			</div>
		</div>
	</div>














<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>