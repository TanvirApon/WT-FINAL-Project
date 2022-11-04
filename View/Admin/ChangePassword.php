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
 	<td><?php include "../View/Header.php"; ?></td>
</tr>

<tr>
	<td>Welcome,</td>
	<td><?php include "../View/Nav.php"; ?></td>
</tr>

<tr>
	<td align ="middle"width= "25%"><h3><strong>User DashBoard</strong></h3><hr>

<ul>
  <li> <a href="../View/AddProduct.php">Add Product</a> </li>
  <li> <a href="../View/ViewAllProduct.php">Show all Products</a> </li>
  <li> <a href="#">Sell Information</a> </li>
  <li> <a href="#">Payment History</a> </li>
  <li> <a href="../View/ContactAdmin.php">Contact Admin</a> </li>
  <li> <a href="#">Give Feedback</a> </li>
</ul>  

<br>
<strong>User Profile</strong></h3><hr>
<ul>

  <li> <a href="../View/profile.php">View Profile</a> </li>
  <li> <a href="../View/EditProfile.php">Edit Profile</a> </li>
  <li> <a href="../View/ChangePassword.php">Change Password</a> </li>
  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>


	<td width="75%">
<!--                  -------------------------------Profile view code here----------------------------------------       -->
<center>
<form style="vertical-align: center;">
		<fieldset style="text-align: center;height: 200px; width: 350px;">
			<legend>Change Password</legend>
			<label for="currentpass">Current Password: </label>
			<input type="password" name="currentpass" id="currentpass"><br><br>
			<label for="newpass">New Password: </label>
			<input type="password" name="newpass" id="newpass"><br><br>
			<label for="confirmpass">Confirm Password: </label>
			<input type="password" name="confirmpass" id="confirmpass"><br><br>
			<input type="submit" name="submit" value="submit">

		</fieldset>

	</form>
</center>

<!--          ----------------------End View Section------------------------------                     -->

	</td>
</tr>

<tr>
	<td colspan="2"><?php include "../View/Footer.php"; ?></td>
</tr>

</table>
</body>
</html>