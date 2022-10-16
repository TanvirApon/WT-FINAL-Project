<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
	<?php include "Header.php"; ?>
    <?php include "Nav.php"; ?>

	<form action="Login.php">
		<center>
			
			<fieldset style="text-align:center; height: 75%; width: 40%; bottom: 35%;">
			<legend>Register Here</legend>
		<label for="fname">First Name:</label>
		<input type="text" name="fname" id="fname"><br><br>
		<label for="lname">Last Name:</label>
		<input type="text" name="lname" id="lname"><br><br>
		<label>Gender: </label>
	    <input type="radio" name="gender" id="male" value="Male">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="Female">
   	    <label for="female">Female</label>
		<input type="radio" name="gender" id="others" value="Others">
		<label for="others">Others</label><br><br>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email"><br><br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password"><br><br>
		<label for="cpassword">Confirm Password:</label>
		<input type="password" name="cpassword" id="cpassword"><br><br>

		<input type="submit" name="signin" value="Sign In"><br><br>
		Already Have an Account?<a href="Login.php">Login Here</a>

		</fieldset>
		</center>
	</form>
<?php include "Footer.php"; ?>


</body>
</html>