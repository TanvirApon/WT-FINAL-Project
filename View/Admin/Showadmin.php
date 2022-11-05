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
			
			$data = file_get_contents('../../Model/admin.json');
		
			$data = json_decode($data,true);
 

           if($data==null)
           {
             echo("No data found");
           
           
            }

			  $index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row['FirstName']."</td>
						<td>".$row['LastName']."</td>
						<td>".$row['Email']."</td>
						<td>".$row['Password']."</td>
						<td>".$row['Answer']."</td>
						<td>
							<a href='AdminUpdate.php?index=".$index."'>Edit</a>
							<a href='../../Controller/Admin/RemoveAdmin.php?index=".$index."'>Delete</a>
						</td>
					</tr>
				";
 
				$index++;
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