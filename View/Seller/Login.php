<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
 <?php include "Header.php"; ?>
 <?php include "Nav.php"; ?>
	<form action="../Controller/LoginAction.php" method="POST">
		<center>
			
			<fieldset style="text-align:center; height: 250px; width: 350px;">
			<legend>Login Here</legend>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" placeholder="Enter your Email"><br>

		<?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""?><br>

		<label for="password">Password:</label>
		<input type="password" name="password" id="password" placeholder="Enter your Password"><br>

		<?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""?><br>

		<input type="submit" name="login" value="Login"><br>

		<?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""?><br><br>

		Didn't Register yet?<a href="Registration.php">Register Here</a><br>
		Forgot Password?<a href="forgetPassword.php">Click here</a>

		</fieldset>
		</center>
	</form>
	<hr>
<?php include "Footer.php"; ?>

</body>
</html>