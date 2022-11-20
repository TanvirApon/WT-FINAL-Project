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

  <li> <a href="../../Controller/Admin/LogoutAction.php">Logout</a> </li>
</ul> 
</td>




	<td width="75%">
<center>
      <h2><strong> Admin Details</strong></h2><hr>

<table border="">
      <tr>
	     <th>Id</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email</th>
         <th>Password</th>
         <th>BirthPlace</th>
               </tr>
      <?php
   
     $servername="localhost";
     $username="root";
     $pass="";
     $database="Shop";
   
     $con =  new mysqli($servername,$username,$pass,$database);
   
  
   
	  if($con->connect_error){
	  
	   die("Connection Failed: ".$con->connect_error);
   
	  }

	  else {

	  $sql="SELECT * FROM admin";
	  $result=$con->query($sql);
  
      $count=mysqli_num_rows($result); 


      if($count>0){

      while($row=$result->fetch_assoc())
	  {
		 $id=$row['id'];
		 $fname=$row['firstname'];
		 $lname=$row['lastname'];
         $email=$row['email'];
		 $pass=$row['password'];
		 $answer=$row['answer'];

	?>
		 			<tr>
					    <td><?php echo $id; ?></td>
		 				<td><?php echo $fname; ?></td>
		 				<td><?php echo $lname; ?></td>
		 				<td><?php echo $email; ?></td>
		 				<td><?php echo $pass; ?></td>
						 <td><?php echo $answer; ?></td>
                        <td>
						  <a href="AdminUpdate.php?id=<?php echo $id ?>">Edit</a>
							<a href="../../Controller/Admin/RemoveAdmin.php?id=<?php echo $id?>">Delete</a>

						</td>
						
	
		 			</tr>
			
<?php

      }

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