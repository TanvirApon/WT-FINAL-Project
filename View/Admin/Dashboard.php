<?php
 session_start();

if(isset($_SESSION['email']))
{
	
	
}
else
{
	header("Location:Login.php");
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
 <td width="15%"><img src="../../Image/logo.jpg" width="15%" height="20%">
 	<td><?php include "Header.php"; ?></td>
</tr>

<tr>
	<td> </td>
</tr>

<tr>
	<td align ="middle"width= "25%"><h3><strong>User DashBoard</strong></h3><hr>

<ul>
  <li> <a href="Admin.php">Admin</a> </li>
  <li> <a href="Employee.php">Employee</a> </li>
  <li> <a href="../Seller/AddProduct.php">Product</a> </li>
  <li> <a href="Seller.php">Seller</a> </li>
  </ul>  

<br>
<strong>User Profile</strong></h3><hr>
<ul>

  <li> <a href="../../Controller/Admin/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	
</tr>

<tr>
	<td colspan="2"><?php include "Footer.php"; ?></td>
</tr>

</table>
</body>
</html>