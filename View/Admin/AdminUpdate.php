<?php
	
    $index = $_GET['index'];
	$data = file_get_contents('../../Model/admin.json');
	$data= json_decode($data);
	$row =($data[$index]);
 
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

  <li> <a href="Showadmin.php">View Profile</a> </li>
  <li> <a href="Showadmin.php">Edit Profile</a> </li>
  <li> <a href="Showadmin.php">Change Password</a> </li>
  <li> <a href="../Controller/LogoutAction.php">Logout</a> </li>
</ul> 
</td>



	<td width="75%">
<center>
      <h2><strong> Admin Update</strong></h2><hr>

      <form method="POST">
      <table>
	<tr>
		<td><label for="fname">First Name:</label></td>
		<td><input type="text" name="fname" id="fname" value="<?php echo $row->FirstName;?>"></td>

	</tr>
    <tr>
		<td><label for="Lname">Last Name:</label></td>
		<td><input type="text" name="lname" id="lname" value="<?php echo $row->LastName;?>"></td>

	</tr>

    <tr>
		<td><label for="email">Email:</label></td>
		<td><input type="text" name="email" id="email" value="<?php echo $row->Email;?>"></td>
	</tr>

    <tr>
		<td><label for="password">Password:</label></td>
		<td><input type="text" name="password" id="password" value="<?php echo $row->Password;?>"></td>
	</tr>

   

    <tr>
		<td><label for="question">Where is your birthpalce:</label></td>
		<td><input type="text" name="question" id="question" value="<?php echo $row->Answer;?>"></td>
	</tr>

<tr>
		<td><input type="submit" name="save" value="save">
		
</table>
</form>
 

<?php
	if(isset($_POST['save'])){
        //set the updated values
        $input = array(
            'FirstName' => $_POST['fname'],
            'LastName' => $_POST['lname'],
            'Email' => $_POST['email'],
            'Password' => $_POST['password'],
            'Answer' => $_POST['question']
        );
 
        $data_array[$index] = $input;

        $data = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('../../Model/admin.json', $data);
 
        header('location: Showadmin.php');
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