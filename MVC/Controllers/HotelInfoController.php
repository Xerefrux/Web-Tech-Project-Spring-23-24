<?php

require_once('../Models/alldb.php');

function Show_Hotel_Info($id)
{
	$res = HotelInfo($id);

	return $res;
}

function getHotelPic($id)
{
	$res = Hotel_Pic($id);

	return $res;
}

?>