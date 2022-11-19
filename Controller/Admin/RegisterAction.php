<?php 
<<<<<<< HEAD

		$fname=$lname=$email=$password=$cpassword=$ques="";
		$fnameEr=$lnameEr=$emailEr=$passwordEr=$cpasswordEr=$quesEr='';
		$flag=false;
		$successMesg = $errorMesg = "";
		
		if(htmlspecialchars($_SERVER['REQUEST_METHOD']=="POST"))
		{
			$fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $cpassword = $_POST['cpassword'];
                        $ques = $_POST['question'];
			
                        header("Location:../../View/Admin/Admin.php");
			
                        if(empty($fname))
			{
				$fnameEr="First Name is required  ";
				$flag=true;
				
			}
			else
			{
				$fname=senitize($fname);
				$flag=false;
			}

                        if(empty($lname))
			{
				$lnameEr="Last name is required  ";
				$flag=true;
				
			}
			else
			{
				$lname=senitize($lname);
				$flag=false;
			}


			if(empty($email))
			{
				$emailEr="Email is required  ";
				$flag=true;
				
			}
			else
			{
				$email=senitize($email);
				$flag=false;
			}
			if(empty($password))
			{
				$passwordEr= "Password is  required  ";
				$flag=true;
				
			}
			else
			{
				$password=senitize($password);
				$flag=false;
			}
			if(empty($cpassword))
			{
				$cpasswordEr= "Confirm password is  required  ";
				$flag=true;
				
			}
			else if($cpassword!==$password)
			{
				$cpasswordEr= "Confirm password is  not matched  ";
				$flag=true;

			}
			else
			{
				$cpassword=senitize($cpassword);
				$flag=false;
			}
                         
                        if(empty($ques))
			{
				$quesEr="Answer is required  ";
				$flag=true;
				
			}
			else
			{
				$qus=senitize($ques);
				$flag=false;
			}

			

			if(!$flag)
			{
				$filename="../../Model/admin.json";
				$mode="a";
				$handle=fopen($filename, $mode);

				$arr1=array(
							
							"FirstName" => "$fname" , "LastName" => "$lname","Email" => "$email","Password" => "$password","Answer"=>"$ques"
						);

				$encode=json_encode($arr1);
				$current_data = file_get_contents($filename);  
				$array_data = json_decode($current_data, true);  //array

				$arr2=array(
						
							"FirstName" => "$fname" , "LastName" => "$lname","Email" => "$email","Password" => "$password","Answer"=>"$ques"
						);

				$array_data[]=$arr2;

				$final_encode=json_encode($array_data);

				fwrite($handle, $final_encode);

				$read_data=file_put_contents('../../Model/admin.json', $final_encode);
                                
                                

				if($read_data)
				{
					$successMesg="save successfully";
                                     sheader("Location: ../../View/Admin/Admin.php");

				}
				else
				{
					$errorMesg="error while saving";
				}

				
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
=======
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
