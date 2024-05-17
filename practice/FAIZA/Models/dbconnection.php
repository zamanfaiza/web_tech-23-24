<?php 

function conn()
{
	$serverName="localhost";
    $userName="root";
    $pass="";
    $dbName="tour guide";
    $conn=new mysqli($serverName,$userName,$pass,$dbName);
    return $conn;
}



?>