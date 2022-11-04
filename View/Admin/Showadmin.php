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
	<td>Welcome,</td>
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

  <li> <a href="../View/profile.php">View Profile</a> </li>
  <li> <a href=../View/EditProfile.php>Edit Profile</a> </li>
  <li> <a href="../View/ChangePassword.php">Change Password</a> </li>
  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	<td width="75%">
<center>
      <h2><strong> Admin Details</strong></h2><hr>

<table border="">
      <tr>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Password</th>
         <th>BirthPlace</th>
               </tr>



   <?php
      $json_data = file_get_contents("../../Model/admin.json");
      $files = json_decode($json_data, true);
      if(count($files) != 0){
            foreach ($files as $admin) {
               ?>
                  <tr>
            
                     <td> <?php echo $admin['FirstName']; ?> </td>
                     <td> <?php echo $admin['LastName']; ?> </td>
                     <td> <?php echo $admin['Email']; ?> </td>
                     <td> <?php echo $admin['Password']; ?></td>
                     <td> <?php echo $admin['Answer']; ?> </td>
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