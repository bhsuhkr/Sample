<?php 
session_start();
include_once("db.php");
$notice = $_GET['login'];
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/register.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<title>Login</title>


<div class="container">
	<div class="register_container">
		<form class="form-signin" action="validate.php" method="post" id="login-form">
			<h2 class="form-signin-heading">User Login Form</h2><hr />
			<div id="error">
			</div>
			<div class="form-group">
				<input type="text" placeholder="Username" name="user_name" id="user_name" />
			</div>
			<div class="form-group">
				<input type="password" placeholder="Password" name="password" id="password" />
			</div>
			<h1><?
				if($notice == "False"){
					echo("Please login first!!!");
				}
				else if($notice == "reg"){
					echo("Registering Successful!!");

				}
				?></h1>
			<hr />
			<div class="form-group">
				<button type="submit" name="btn-login" id="btn-login">Login</button> 
				<a href="signup.php">sign up</a>
				
			</div>  
		</form>
	</div>
	
</div>
</body>
</html>