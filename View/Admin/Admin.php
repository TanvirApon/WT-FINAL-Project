<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
</head>
<body>

	<table border= "1" width= "100%">
<tr width="100%">
 <td width="15%"><img src="../../Image/logo.jpg" width="15%" height="20%">
 	<td><?php include "Header.php"; ?></td>
</tr>

<tr>
	<td>Welcome, @</td>
	<td><?php include "Nav.php"; ?></td>
</tr>

<tr>
	<td align ="middle"width= "25%"><h3><strong>User DashBoard</strong></h3><hr>

<ul>
  <li> <a href="Admin.php">Add Admin</a> </li>
  <li> <a href="Showadmin.php">Show all Admin</a> </li>
</ul>  

<br>
<strong>User Profile</strong></h3><hr>
<ul>

  <li> <a href="Showadmin.php">View Profile</a> </li>
  <li> <a href="Showadmin.php">Edit Profile</a> </li>
  <li> <a href="Showadmin.php">Change Password</a> </li>
  <li> <a href="../../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	<td width="75%">
		<center>
			<h3><strong>Add Admin</strong></h3><br><br>
			<form action="../../Controller/Admin/RegisterAction.php" method="POST">
				<!--<fieldset style="text-align:center; height: 70%; width: 50%;">
					<legend> <h3><strong>Add Product</strong></h3></legend> -->
<table>
	<tr>
		<td><label for="fname">First Name:</label></td>
		<td><input type="text" name="fname" id="fname"></td>

	</tr>
    <tr>
		<td><label for="Lname">Last Name:</label></td>
		<td><input type="text" name="lname" id="lname"></td>

	</tr>

    <tr>
		<td><label for="email">Email:</label></td>
		<td><input type="text" name="email" id="email"></td>
	</tr>

    <tr>
		<td><label for="password">Password:</label></td>
		<td><input type="password" name="password" id="password"></td>
	</tr>

    <tr>
		<td><label for="cpassword">Confirm Password:</label></td>
		<td><input type="password" name="cpassword" id="cpassword"></td>
	</tr>

    <tr>
		<td><label for="question">Where is your birthpalce:</label></td>
		<td><input type="text" name="question" id="question"></td>
	</tr>

<tr>
		<td><input type="submit" name="add" value="Add">
		<input type="reset" name="clear" value="Clear"><br><br></td> </tr>

</table>
				<!--</fieldset>  -->

			</form>

		</center>


	</td>
</tr>

<tr>
	<td colspan="2"><?php include "Footer.php"; ?></td>
</tr>

</table>
</body>
</html>