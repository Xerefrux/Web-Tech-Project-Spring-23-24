<?php


function getTotalCheckIn($id)
{
	$res4 = NoOfCheckIn($id);

	return $res4;
}



function getTotalBookings($id)
{
	$res2 = NoOfBooking($id);

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

function getPaymentChart($id)
{
	$res = Payments_graph($id);

	return $res;
}


function getReview()
{
	$res = review();

	return $res;
}

?>