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
	<td>Welcome, @</td>
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




	<td width="75%">
		<center>
			<h3><strong>Add Product</strong></h3><br><br>
			<form action="" method="post">
				<!--<fieldset style="text-align:center; height: 70%; width: 50%;">
					<legend> <h3><strong>Add Product</strong></h3></legend> -->
<table>
	<tr>
		<td><label for="productname">Product Name:</label></td>
		<td><input type="text" name="productname" id="productname"></td>

	</tr>
		<tr>
			<td><label for="brand">Brand:</label></td>
		<td><input type="text" name="brand" id="brand"> </td></tr>

<tr>
	<td><label for="category">Select Category:</label></td>
	<td>

<select name="category" id="category">
  <option value="cosmetics">Cosmetics</option>
  <option value="clothes">Clothes</option>
  <option value="toys">Baby Toys</option>
  <option value="electronics">Electronics</option>
</select>

</td>
</tr>
<tr>
	<td><label for="price">Price:</label></td>
	<td> <input type="number" name="price"> </td>
</tr>
<tr>
	<td><label for="quantity">Quantity:</label></td>
	<td> <input type="number" name="quantity" max="20" min="1"> </td>
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