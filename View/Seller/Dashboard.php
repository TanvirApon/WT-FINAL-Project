<?php 

session_start();

if(isset($_SESSION['email']))
{
	header("Location: ../View/Dashboard.php");
	
}
else
{
	header("Location:../View/Login.php");
}
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
  <li> <a href="ViewProduct.php">Show all Products</a> </li>
  <li> <a href="#">Sell Information</a> </li>
  <li> <a href="#">Payment History</a> </li>
  <li> <a href="#">Contact Admin</a> </li>
  <li> <a href="#">Give Feedback</a> </li>
</ul>  

<br>
<strong>User Profile</strong></h3><hr>
<ul>

  <li> <a href="#">View Profile</a> </li>
  <li> <a href="#">Edit Profile</a> </li>
  <li> <a href="#">Change Password</a> </li>
  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	<td width="75%">Information PAges FORM</td>
</tr>

<tr>
	<td colspan="2"><?php include "Footer.php"; ?></td>
</tr>

</table>
</body>
</html>