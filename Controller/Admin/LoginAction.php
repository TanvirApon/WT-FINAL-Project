<?php
session_start();


if($_SERVER['REQUEST_METHOD'] === "POST")
{
  $email = sanitize($_POST['email']);
  $password = sanitize($_POST['password']);
  $flag = true;

    if(empty($email))
      { $_SESSION['email_error_msg']= "Email can not be empty!";
        $flag = false; }

    if(empty($password))
      { $_SESSION['password_error_msg']= "Password field can not be empty!";
        $flag = false; }

if($flag===true)
{
  $_SESSION['email_error_msg']= "";
  $_SESSION['password_error_msg']= "";



$filename = "../../Model/admin.json";
$file= fopen($filename, "r");
$fz = filesize($filename);

if($fz> 0)

{
   $fr = fread($file, $fz);
   $users = json_decode($fr);
   $found = false;
  for($i = 0; $i< count($users); $i++) {
if($users[$i]->Email ===$email and $users[$i]->Password ===$password)
{
$found = true;
break;}
}
if($found===true)
{
header("Location:../../View/Admin/Dashboard.php");
}
else
{ $_SESSION['global_error_msg']= "Email or Password does not match!!";
header("Location:../../View/Admin/Login.php");
}
 }

else
{
$_SESSION['global_error_msg'] = "Something Wrong!! ";
}
fclose($file);

}
else
{
header("Location:../../View/Admin/Login.php");
}
}

function sanitize($data)
{
$data= trim($data);
$data= stripslashes($data);
$data= htmlspecialchars($data);
return $data;
}

?>