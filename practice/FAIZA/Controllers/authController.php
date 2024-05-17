<?php 
require_once('../Models/Alldb.php');
session_start();
$id=$_POST['id'];
$pass=$_POST['pass'];
$status=auth($id,$pass);

if($status)
{
	$_SESSION['id']=$id;
	header("location:../Views/dashboard.php");
}
else
{
	header("location:../Views/tourGuid_login.php");
	$_SESSION['mess']="Your ID & Pass is invalid";
}


?>