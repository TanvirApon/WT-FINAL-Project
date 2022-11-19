
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

  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>



	<td width="75%">
<center>
      <h2><strong> Admin Update</strong></h2><hr>
      <form action="../../Controller/Admin/update.php" method="POST" >
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
		if(isset($_GET['id'])){
		$id =$_GET['id'];
        $sql="SELECT id,firstname,lastname,email,password,answer FROM admin WHERE id = '$id'";
		$result=$con->query($sql);
       
		$count = mysqli_num_rows($result);

		
		if($count > 0)
		{

        while($row=$result->fetch_assoc()){

 ?>  
	  <table>
		<tr>
		<td><label for="id">Id:</label></td>
		<td><input type="text" name="id" id="id" value="<?php echo $row['id'];?>"></td>

	</tr>
 

	<tr>
		<td><label for="fname">First Name:</label></td>
		<td><input type="text" name="fname" id="fname" value="<?php echo $row['firstname'];?>"></td>

	</tr>
    <tr>
		<td><label for="Lname">Last Name:</label></td>
		<td><input type="text" name="lname" id="lname" value="<?php echo $row['lastname'];?>"></td>

	</tr>

    <tr>
		<td><label for="email">Email:</label></td>
		<td><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"></td>
	</tr>

    <tr>
		<td><label for="password">Password:</label></td>
		<td><input type="text" name="password" id="password" value="<?php echo $row['password'];?>"></td>
	</tr>

   

    <tr>
		<td><label for="question">Where is your birthpalce:</label></td>
		<td><input type="text" name="question" id="question" value="<?php echo $row['answer'];?>"></td>
	</tr>

    <tr>
		<td><input type="submit" name="save" value="save">
		</tr>	
	
		<tr>
		<td><input type="hidden" name="hidden_id" value="<?php echo $id;?>">
		</tr>	
</table>
</form>
<?php

		}
	}

}

	 }

?>


</center>

	</td>
</tr>

<tr>
	<td colspan="2"><?php include "Footer.php"; ?></td>
</tr>

</table>
</body>
</html>