<?php 
if($_SERVER['REQUEST_METHOD']==="POST")
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$ques = $_POST['ques'];
header("Location:../View/Login.php");
}
$filename = "../Model/seller.json";
$file= fopen($filename, "r");
$data="";
if(filesize($filename) > 0)
{
	$data= fread($file, filesize($filename));

}
fclose($file);

$file=fopen($filename,"w");

if(empty($data))
{
	$content =array(array("FirstName" => "$fname" , "LastName" => "$lname","Gender" => "$gender","Email" => "$email","Password" => "$password","Answer"=>"$ques"));
	$content = json_encode($content);
	fwrite($file, $content);

}
else
{
	$data= json_decode($data);
	$new_content =array("FirstName" => "$fname","LastName" => "$lname","Gender" => "$gender","Email" => "$email","Password" => "$password","Answer"=>"$ques");


	$data[]=$new_content;
	$data= json_encode($data);
	fwrite($file, $data);

}
?>
