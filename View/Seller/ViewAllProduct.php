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
  <li> <a href=../View/EditProfile.php>Edit Profile</a> </li>
  <li> <a href="../View/ChangePassword.php">Change Password</a> </li>
  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	<td width="75%">
<center>
      <h2><strong> Product Details</strong></h2><hr>

<table border="">
      <tr>
         <th>Product Name</th>
         <th> Brand</th>
         <th>Category</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Image</th>
         <th>Action</th>
      </tr>



   <?php
      $json_data = file_get_contents("../Model/product.json");
      $products = json_decode($json_data, true);
      if(count($products) != 0){
            foreach ($products as $product) {
               ?>
                  <tr>
            
                     <td> <?php echo $product['ProductName']; ?> </td>
                     <td> <?php echo $product['Brand']; ?> </td>
                     <td> <?php echo $product['Category']; ?> </td>
                     <td> <?php echo $product['Price']; ?> Taka </td>
                     <td> <?php echo $product['Quantity']; ?> </td>
                     <td> <img src="<?php echo $product['Image']; ?>" alt=""> </td>
                     <td><a href="EditProduct.php">Edit  |</a>
                        <a href="RemoveProduct.php"> Remove</a>

                     </td>
                     
                  </tr>
               <?php
            }
         }
      ?>
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