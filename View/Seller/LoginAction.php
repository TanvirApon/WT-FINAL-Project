<?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
	$isValid= true;


	if(empty($_POST['email']))
		{ echo "Please fill up the email";
		 $isValid=false;	
		}

	else
	{
		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			echo "Please Correct your Email";
			$isValid = false;
		}

	}
	if(empty($_POST['password']))
		{ echo "Please fill up the password Properly";
		 $isValid=false;	
		}

		if($isValid)
		{
			echo "Email: ".sanitize($_POST['email']);
			echo "<br>";
			echo "Password: ".sanitize($_POST['password']);
		}
		/*else
		{
			header("Location: Login.php");
		}*/
		else
		{
			header("Location: Error.php");
		}
}

function sanitize($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;

}
?>
