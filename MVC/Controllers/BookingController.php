<?php
require_once('../Models/alldb.php');

function getBookinglist($M_id)
{
	$res = Booking($M_id);

	return $res;
}

function AcceptList($id, $M_id)
{
	$res2 = AcceptBooking($id, $M_id);

	return $res2;
}

function getTotalCheckIn($id)
{
	$res4 = NoOfCheckIn($id);

	return $res4;
}

function acceptBookingWithLimit($id, $M_id, $limit = 10)
{
    $totalCheckIns = getTotalCheckIn($M_id);
    if ($totalCheckIns >= $limit) {
        // If the limit is reached or exceeded, return a message indicating all rooms are filled
        return "All the rooms have been filled.";
    } else {
        // If the limit is not reached, proceed with accepting the booking
        $res2 = AcceptBooking($id, $M_id);
        insertCheckInList($res2["ID"], $res2["Name"], $res2["Booking_Date"], $res2["Payments"], $M_id);
        deletefromBookingList($id, $M_id);
        return null; // Return null to indicate the booking was accepted
    }
}

function getProfilePic($id)
{
	$res = Profile_Pic($id);

	return $res;
}
?>