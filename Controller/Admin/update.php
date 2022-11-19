<?php 
 
 
    $servername="localhost";
	$username="root";
	$pass="";
	$database="Shop";
	
	$con =  new mysqli($servername,$username,$pass,$database);
	
	if($con->connect_error){
		  
		die("Connection Failed: ".$con->connect_error);
	
	   }
	
    else{

       if(isset($_REQUEST['save'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ques = $_POST['question'];
        $id = $_REQUEST['hidden_id'];

        $query="UPDATE admin SET firstname='$fname',lastname='$lname',email='$email',password='$password',answer='$ques' WHERE id='$id'";
        $update=mysqli_query($con,$query);
        
         if($update)
         {

          header("Location:../../View/Admin/Admin.php");

         }
         




       }






    }



















 ?>      