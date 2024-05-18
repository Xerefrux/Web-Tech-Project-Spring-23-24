<?php

require_once('../Models/alldb.php');

function Show_Invoice_Profile($id)
{
	$res = Profile_Info($id);

	return $res;
}

function getPaymentList($id)
{
	$res2 = Payment_List($id);

	return $res2;
}

function getTotalPayment($id)
{
	$res3 = TotalPayment($id);

	return $res3;
}

function getProfilePic($id)
{
	$res = Profile_Pic($id);

	return $res;
}


?>