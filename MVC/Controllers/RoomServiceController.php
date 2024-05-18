<?php
require_once('../Models/alldb.php');

function getRoomServicelist()
{
	$res = RoomServiceList();

	return $res;
}


function getRoomServiceRoom($Room_No)
{
	$res2 = SelectRoom($Room_No);

	return $res2;
}

function getProfilePic($id)
{
	$res = Profile_Pic($id);

	return $res;
}

?>