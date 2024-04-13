<?php

$pwd="";
if(isset($_POST["reset_btn"]))
{
	 $connect = mysqli_connect("localhost","root","","project4");
	$un = $_POST["username"];
	$mob = $_POST["phone"];

$qry = "SELECT * FROM `user` WHERE username='$un' AND phone='$mob' ";

$result = mysqli_query($connect,$qry);

$data = mysqli_fetch_assoc($result);

$id = $data["id"];

$rows = mysqli_num_rows($result);

if($rows>0)
{
	$pwd = randomPassword();
	
	$qry= "UPDATE `user` SET `password`='$pwd' WHERE id='$id'";
	$result = mysqli_query($connect,$qry);
	echo "password Reset successfull";
}
else
{
	?> <script> alert("Invalid username or Mobile no")</script><?Php
}

}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>



<!DOCTYPE html>
<html>
<head>
	<title> reset form</title>

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
				<h2>Reset Form</h2>
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
							<input type="text" name="username" placeholder="Username" class="form-control">
						</div>
						<div class="form-group">
							<input type="tel" name="phone" placeholder="Mobile no" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" name="reset_btn" class="btn btn-info" class="form-control"> Reset Password</button>
						</div>
						<h6> Password -<font color="blue"> <?php echo $pwd ; 	 ?></font></h6>
						Kindly copy password.
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