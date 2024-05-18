<?php 

function conn()
{
	$serverName="localhost";
    $userName="root";
    $pass="";
    $dbName="tourist_management";
    $conn=new mysqli($serverName,$userName,$pass,$dbName);
    return $conn;
}



?>

