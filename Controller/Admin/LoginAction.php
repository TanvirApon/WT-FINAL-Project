<?php
	session_start();
	$servername="localhost";
 $username="root";
 $pass="";
 $database="Shop";
 
 $con =  new mysqli($servername,$username,$pass,$database);
 

 
	if($con->connect_error){
	
	 die("Connection Failed: ".$con->connect_error);
 
	}

  


    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $con->prepare("SELECT email, password FROM admin WHERE email=? AND  password=? LIMIT 1");
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $stmt->bind_result($email, $password);
    $stmt->store_result();
    if($stmt->num_rows == 1)  
        {
            while($stmt->fetch()) 

              {
               $_SESSION['email'] = $email;
               header("Location:../../View/Admin/Dashboard.php");
               exit();
               }
        }
        else {
            echo "INVALID USERNAME/PASSWORD Combination!";
        }
        $stmt->close();
     $con->close();

  
?>
