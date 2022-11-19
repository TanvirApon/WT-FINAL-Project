<?php 
if($_SERVER['REQUEST_METHOD']==="POST")
{
$productname = $_POST['productname'];
$brand = $_POST['brand'];
$category = $_POST['category'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$image = $_POST['image'];
header("Location:../View/AddProduct.php");
}
$filename = "../Model/product.json";
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
	$content =array(array("ProductName" => "$productname" , "Brand" => "$brand" , "Category" => "$category" , "Price" => "$price" , "Quantity" => "$quantity" , "Image"=>"$image"));
	$content = json_encode($content);
	fwrite($file, $content);

}
else
{
	$data= json_decode($data);
	$new_content =array("ProductName" => "$productname" , "Brand" => "$brand" , "Category" => "$category" , "Price" => "$price" , "Quantity" => "$quantity" , "Image"=>"$image");


	$data[]=$new_content;
	$data= json_encode($data);
	fwrite($file, $data);

}
?>
