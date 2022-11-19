<?php 

session_start();
$_session = array();
session_destroy();

header("Location:../../View/Admin/Login.php");


?>