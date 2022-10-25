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
header("Location: Login.php");
}

$file= fopen("data.json", "r");
$data="";
if(filesize("data.json") > 0)
{
	$data= fread($file, filesize("data.json"));

}
fclose($file);

$file=fopen("data.json","w");

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
