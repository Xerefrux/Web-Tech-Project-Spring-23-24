<?php
require_once('db.php');

function loginAuth($id,$pass)
{	
	$con=conn();
	$sql="select * from hotel_manager where ID='$id' and Password='$pass'";
	$res= mysqli_query($con,$sql);
	$row=mysqli_num_rows($res);
	if($row==1)
	{
		return $res;
	}
	else
	{
		return false;
	}
}
/*function add($id,$pass)
{
	$sql1="insert into ab (id,pass) values ('$id','$pass')";
	$con=conn();
	$res= mysqli_query($con,$sql1);
	if($res)
	{
		return true;
	}
	else
	{
		return false;
	}

}*/
function Booking($M_id)
{
	$con=conn();
	$sql="select * from bookings where Manager_ID='$M_id'";
	$res= mysqli_query($con,$sql);

	return $res;
}

function AcceptBooking($id, $M_id)
{
	$con=conn();
	$sql="select * from bookings where ID='$id' and Manager_ID='$M_id'";
	$res= mysqli_query($con,$sql);

	return $res->fetch_assoc();
}

function insertCheckInList($id, $Name, $BD, $Payments, $M_id)
{
	$con=conn();
	/*$sql="INSERT INTO check_in_list (ID, Name, C) VALUES ('$id', '$Name', '$BD')";*/
	$sql1 = "Insert into check_in_list values ('$id', '$Name', '$BD', '$Payments', '$M_id')";
	$res= mysqli_query($con,$sql1);
}



function deletefromBookingList($id, $M_id)
{
	$con=conn();
	$sql = "Delete from bookings where ID='$id' and Manager_ID='$M_id'";
	$res= mysqli_query($con,$sql);
}


function Profile_Info($id)
{
	$con=conn();
	$sql="select * from hotel_manager where ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res;
}

function Update_Profile($id, $Name, $Password, $Email, $Address)
{
	$con=conn();
	$sql="update hotel_manager set Name ='$Name', Password = '$Password', Email = '$Email', Address = '$Address' where ID='$id'";
	$res= mysqli_query($con,$sql);

}

function HotelInfo($id)
{
	$con=conn();
	$sql="select * from hotel_info where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res;
}

function Update_Hotel_Info($Name, $Address, $Email, $Description, $M_ID)
{
	$con=conn();
	$sql="update hotel_info set Name ='$Name', Address = '$Address', Email = '$Email', Description = '$Description' where Manager_ID='$M_ID'";
	$res= mysqli_query($con,$sql);

}

function RoomServiceList()
{
	$con=conn();
	$sql="select * from room_service_request";
	$res= mysqli_query($con,$sql);

	return $res;
}

function SelectRoom($Room_No)
{
	$con=conn();
	$sql="select * from room_service_request where Room_No='$Room_No'";
	$res= mysqli_query($con,$sql);

	return $res->fetch_assoc();
}


function deletefromRoomServiceList($Room_No)
{
	$con=conn();
	$sql = "Delete from room_service_request where Room_No='$Room_No'";
	$res= mysqli_query($con,$sql);
}

function Profile_Invoice_Info($id)
{
	$con=conn();
	$sql="select * from hotel_manager where ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res;
}

function Payment_List($id)
{
	$con=conn();
	$sql="select * from check_in_list where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res;
}

function TotalPayment($id)
{
	$con=conn();
	$sql="select SUM(Payments) as Total from check_in_list where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
    return $row['Total'];
}

function Profile_Pic($id)
{
	$con=conn();
	$sql="select * from hotel_manager where ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res->fetch_assoc();
}

function Check_In_List($id)
{
	$con=conn();
	$sql="select * from check_in_list where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res;
}

function NoOfCheckIn($id)
{
	$con=conn();
	$sql="select COUNT(*) as TotalCheckIn from check_in_list where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
    return $row['TotalCheckIn'];
}

function NoOfBooking($id)
{
	$con=conn();
	$sql="select COUNT(*) as TotalBookings from bookings where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
    return $row['TotalBookings'];
}

function Hotel_Pic($id)
{
	$con=conn();
	$sql="select * from hotel_info where Manager_ID='$id'";
	$res= mysqli_query($con,$sql);

	return $res->fetch_assoc();
}

function Payments_graph($id)
{
$con=conn();

$sql="select SUM(Payments) as Total, Check_In_Date from check_in_list where Manager_ID='$id' Group By Check_In_Date Order By STR_TO_DATE(Check_In_Date, '%d-%m-%Y') ASC";
$res= mysqli_query($con,$sql);

return $res;
}


function TotalCheckIns_graph($id)
{
$con=conn();

$sql="select COUNT(*) as Total, Check_In_Date from check_in_list where Manager_ID=111 Group By Check_In_Date Order By STR_TO_DATE(Check_In_Date, '%d-%m-%Y') ASC";
$res= mysqli_query($con,$sql);

return $res;
}


function review()
{
	$con=conn();
    $sql= "Select * from reviews";
    $res= mysqli_query($con,$sql);

    return $res;
}

function RegisterHotelInfo($Name, $Address, $Email, $Description, $Image, $M_ID)
{
	$con=conn();
	$Name = mysqli_real_escape_string($con, $Name);
    $Address = mysqli_real_escape_string($con, $Address);
    $Email = mysqli_real_escape_string($con, $Email);
    $Description = mysqli_real_escape_string($con, $Description);
    $Image = mysqli_real_escape_string($con, $Image);
    $M_ID = mysqli_real_escape_string($con, $M_ID);
    
    $sql1 = "Insert into hotel_info (Name, Address, Email, Description, Image, Manager_ID) values ('$Name', '$Address', '$Email', '$Description','$Image', '$M_ID')";
     $res = mysqli_query($con,$sql1);

     return $res;
}


?>


