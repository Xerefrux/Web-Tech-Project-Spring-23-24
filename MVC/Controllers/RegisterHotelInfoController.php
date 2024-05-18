<?php

require_once('../Models/alldb.php');

function Edit_Hotel_Info($Name, $Address, $Email, $Description, $M_ID)
{
	$res = Update_Hotel_Info($Name, $Address, $Email, $Description, $M_ID);

	return $res;
}


function getHotelPic($id)
{
	$res = Hotel_Pic($id);

	return $res;
}

function Set_Register_Hotel_Info($Name, $Address, $Email, $Description, $Image, $M_ID)
{
	$res = RegisterHotelInfo($Name, $Address, $Email, $Description, $Image, $M_ID);

	return $res;
}



?>