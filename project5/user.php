<?php

    

if(isset($_POST["cpwd_btn"]))
{

$connect = mysqli_connect("localhost","root","","project5");

$un = $_POST["username"];
$cpwd = $_POST["cpwd"];
$npwd =md5($_POST["npwd"]);

$qry = "SELECT * FROM `user` WHERE username='$un' AND password = '$cpwd'";
$result = mysqli_query($connect,$qry);
$data = mysqli_fetch_assoc($result);
$id = $data["id"];

$rows = mysqli_num_rows($result);

if($rows>0)
{
	$qry = "UPDATE `user` SET `password`='$npwd' WHERE id='$id'";
	$result = mysqli_query($connect,$qry);

	if($result)
	{
		?> <script> alert("Password changed succcessfuly");</script><?php
	}
	else
	{
		?> <script> alert("Something went wrong");</script><?php
	}
}
else
{
	?> <script> alert(" Wrong username or password");</script><?php
}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title> change password	</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
					<h3> Change Password</h3>
				</div>
				<div class="card-body">
					<form method="post">
								<div class="form-group">
									<input  type="text" name="username" placeholder="Username" class="form-control">
								</div>
								<div class="form-group">
									<input  type="text" name="cpwd" placeholder="current password" class="form-control">
								</div>
								<div class="form-group">
									<input  type="text" name="npwd" placeholder="new password" class="form-control">
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-success" name="cpwd_btn"> Change password</button>
								</div>

							</form>
					
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