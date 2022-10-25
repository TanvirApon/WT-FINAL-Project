<?php
if($_SERVER['REQUEST_METHOD']==='POST')
{
  
   if(htmlspecialchars($_SERVER['REQUEST_METHOD']==="POST"))
   {
    $email = $_POST['email'];
    $password = $_POST['password'];

   }

if (empty($email)||empty($password))
{


  echo "Field is required";


}

else 
{


   $email=sanitize($email);
   $password=sanitize($password);


  // $file=fopen("data.json","r+");
   $file = file_get_contents('data.json');

    $dec=json_decode($file,true);


   for($i=0;$i<count($dec);$i++){

   if($email==$dec[$i]["Email"] && $password==$dec[$i]["Password"] )

   {


   	  session_start();

	if(isset($_REQUEST['submit'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];

		if( $username != null &&  $password != null){

			$user = $_SESSION['user'];
			if($user['username'] == $username && $user['password'] == $password){
				$_SESSION['status'] = true;
				header('location: home.php');
			}else{
				echo "invalid user";
			}
		}else{
			echo "null submission";
		}
	}







   }

  



 


}

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
