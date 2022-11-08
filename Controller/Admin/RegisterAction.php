<?php 

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