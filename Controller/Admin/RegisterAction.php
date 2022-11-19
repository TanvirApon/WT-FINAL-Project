<?php
session_start();

if($_SERVER['REQUEST_METHOD']==="POST")
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$ques = $_POST['question'];

$a=substr($fname,0,2);
$b=substr($lname,0,2);

$d=date('d');

$id=$a.$b.$d;


header("Location:../../View/Admin/Admin.php");;
 if(empty($fname)||empty($lname)||empty($email)||empty($password)||empty($cpassword)||empty($ques)){
 	echo "Field is empty!!";
 	$_SESSION['global_error_msg']= "Fileds are empty!!"; 	header("Location:../../View/Admin/Admin.php");

 }
 elseif($password != $cpassword){

 	echo "Password & Confirm password doesn't match!!";
	$_SESSION['global_error_msg']= "Password & Confirm Password doesn't match !!!";
 	header("Location:../../View/Admin/Admin.php");

 }

 $servername="localhost";
 $username="root";
 $pass="";
 $database="Shop";
 
 $con =  new mysqli($servername,$username,$pass,$database);
 

 
	if($con->connect_error){
	
	 die("Connection Failed: ".$con->connect_error);
 
	}

else { 
 $stmt = $con->prepare("INSERT INTO admin(id,firstname,lastname, email,password,answer) VALUES(?,?,?,?,?,?)");
 $stmt->bind_param("ssssss",$id,$fname,$lname,$email,$password,$ques);
 
 $stmt->execute();
 $stmt->close();
 $con->close();
 
 
 }








}

function senitize($data)
            {
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
    
            }


?>
>>>>>>> 2ecb83c (Updated with mysql)
