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
			
			<fieldset style="text-align:center; height: 300px; width: 400px;">
			<legend>Login Here</legend>
		<table>
			<tr>
		<td><label for="email">Email:</label></td>
		<td><input type="email" name="email" id="email" placeholder="Enter your Email"></td>

		<td><?php echo isset($_SESSION['email_error_msg']) ? $_SESSION['email_error_msg'] : ""?></td></tr>

<tr>
		<td><label for="password">Password:</label></td>
		<td><input type="password" name="password" id="password" placeholder="Enter your Password"></td>

		<td><?php echo isset($_SESSION['password_error_msg']) ? $_SESSION['password_error_msg'] : ""?></td> </tr>

		<tr><td></td>
		<td><input type="submit" name="login" value="Login"></td></tr>
		<td></td>

		<tr><td colspan="3"><?php echo isset($_SESSION['global_error_msg']) ? $_SESSION['global_error_msg'] : ""?></td></tr>

		<tr><td colspan="3">Didn't Register yet?<a href="../View/Registration.php">Register Here</a></td></tr>

		<tr><td colspan="3">Forgot Password?<a href="../View/ForgetPassword.php">Click here</a></td></tr>
	</table>

		</fieldset>
		</center>
	</form>
	<hr>
<?php include "Footer.php"; ?>

</body>
</html>