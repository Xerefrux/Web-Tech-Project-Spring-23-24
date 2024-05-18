<?php

require_once('../Models/alldb.php');

function Show_Profile($id)
{
	$res = Profile_Invoice_Info($id);

	return $res;
}

function getProfilePic($id)
{
	$res = Profile_Pic($id);

	return $res;
}

?>