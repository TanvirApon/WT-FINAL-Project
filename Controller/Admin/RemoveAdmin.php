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

		if(isset($_REQUEST['id'])){
			$id =$_REQUEST['id'];
	 

            $sql="DELETE FROM admin  WHERE id= '$id'";

			echo $id;

          if($con->query($sql)===TRUE){
            
			echo "Record Deleted Successfully";

			header("Location:../../View/Admin/Showadmin.php");
		  }
		  else{
             echo "Error Deleting Record: ".$con->error;
      
		  }


		
	}

              
	$con->close();
		
}
            function senitize($data)
            {
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
    
            }




?>