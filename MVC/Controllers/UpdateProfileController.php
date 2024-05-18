<?php

require_once('../Models/alldb.php');

function Edit_Profile($id, $Name, $Password, $Email, $Address)
{
	$res = Update_Profile($id, $Name, $Password, $Email, $Address);

	return $res;
}

function getProfilePic($id)
{
	$res = Profile_Pic($id);

	return $res;
}

?>