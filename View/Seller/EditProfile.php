<?php 

/*session_start();

if(isset($_SESSION['email']))
{
	header("Location: ../View/Dashboard.php");
	
}
else
{
	header("Location:../View/Login.php");
}*/
?>



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
 <td width="15%"><img src="../Image/logo.jpg" width="15%" height="20%">
 	<td><?php include "Header.php"; ?></td>
</tr>

<tr>
	<td>Welcome,</td>
	<td><?php include "Nav.php"; ?></td>
</tr>

<tr>
	<td align ="middle"width= "25%"><h3><strong>User DashBoard</strong></h3><hr>

<ul>
  <li> <a href="AddProduct.php">Add Product</a> </li>
  <li> <a href="../View/ViewAllProduct.php">Show all Products</a> </li>
  <li> <a href="#">Sell Information</a> </li>
  <li> <a href="#">Payment History</a> </li>
  <li> <a href="../View/ContactAdmin.php">Contact Admin</a> </li>
  <li> <a href="#">Give Feedback</a> </li>
</ul>  

<br>
<strong>User Profile</strong></h3><hr>
<ul>

  <li> <a href="../View/Profile.php">View Profile</a> </li>
  <li> <a href="../View/EditProfile.php">Edit Profile</a> </li>
  <li> <a href="../View/ChangePassword.php">Change Password</a> </li>
  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	<td width="75%">
		
		<center>
			<form enctype="" action="" method=""></form>
			<h3><strong>User Profile Details</strong></h3><hr>
				<table>
			<tr><td><label for="fname">First Name:</td>
			<td><input type="text" name="fname" id="fname"></td></tr>

			<tr><td>Last Name:</td>
			<td><input type="text" name="lname" id="lname"></td></tr>

			<td><label>Gender: </label></td>
	    <td><input type="radio" name="gender" id="male" value="Male">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="Female">
   	    <label for="female">Female</label></td>

			<tr><td>Email Address:</td>
			<td><input type="email" name="email" id=email></td></tr>

			<tr><td>Contact Number:</td>
			<td><input type="text" name="contact" id="contact"></td></tr>

			<tr>
				<td><label for="address">Address:</label></td>
				<td><textarea name="address" id="address" rows="3"></textarea></td>
			</tr>

			<tr>
				<td><input type="button" name="save" value="Save"></td>
			</tr>
			
</table>
		</center>

	</td>
</tr>

<tr>
	<td colspan="2"><?php include "Footer.php"; ?></td>
</tr>

</table>
</body>
</html>