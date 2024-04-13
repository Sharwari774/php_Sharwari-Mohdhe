<?php

include("connection.php");

if(isset($_POST["register_btn"]))
{
$fn = $_POST["name"];
$eid = $_POST["email"];
$pwd = $_POST["password"];
$cont = $_POST["cont"];

$qry = "INSERT INTO `register`(`id`, `name`, `email`, `password`, `cont`) VALUES (NULL,'$fn','$eid','$pwd','$cont')";

$result = mysqli_query($connect,$qry);

if($result)
{
	?> <script> alert("Registration successful"); </script> <?php
}
else
{
	?> <script> alert("Failed to Register"); </script> <?php
}

}

?>







<!DOCTYPE html>
<html>
<head>
	<title> </title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link href="css/style.css" rel="stylesheet">
	<style>
	.row{
			height: 100vh;
			align-items: center;
		}
		
		body{
			background-color: #c4f5ee;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header">
						<h2>Registration</h2>
					</div>
					<div class="card-body">
						<form method="POST">
							<div class="form-group">
								<input type="text" name="name" placeholder="Fullname" class="form-control">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email ID" class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="password" placeholder="Password" class="form-control">
							</div>
							<div class="form-group">
								<input type="tel" name="cont" placeholder="Mobile no" class="form-control">
							</div>
							<div class="form-group">
								<button type="submit" name="register_btn" class="btn btn-info ">Register</button>
							</div>
							<p>Already have an account? <a href="login.php">Login</a></p>
								
						
					</div>

				</div>
			</div>
		</div>
	</div>























<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>