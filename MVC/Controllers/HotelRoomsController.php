<?php
function getProfilePic($id)
{
	$res = Profile_Pic($id);

	return $res;
}

function getTotalCheckInsChart($id)
{
	$res = TotalCheckIns_graph($id);

	return $res;
}

?>