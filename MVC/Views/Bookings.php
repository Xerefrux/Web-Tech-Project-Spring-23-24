<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/BookingController.php');
require_once('../Models/alldb.php');
if(isset($_POST['Hotel-Room-button']))
{
	header('location:Hotel_Rooms.php');
}
if(isset($_POST['dashboard-button']))
{
	header('location:Dashboard.php');
}
elseif (isset($_POST['Room-Service-button'])) 
{
	header('location:Room_Service.php');
}
elseif (isset($_POST['Payments-button'])) 
{
	header('location:Payments.php');
}
elseif (isset($_POST['Log_Out'])) 
{
	session_destroy();
	header('location:log.php');
}

$M_id= $_SESSION['ID'];

$res5 = getProfilePic($M_id);


$res = getBookinglist($M_id);

$res4 = getTotalCheckIn($M_id);

if(isset($_POST['Accept']))
{
    $message = acceptBookingWithLimit($_POST['Accept'], $M_id);
    if ($message) {
        echo "<script>alert('$message');</script>";
    } else {
        header('location:Bookings.php');
    }
}

if(isset($_POST['Reject'])) 
{
	deletefromBookingList($_POST['Reject'], $M_id);

	header('location:Bookings.php');
}


}

 
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="MyStyle3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
	<!--<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>-->

</head>
<body>
<form method="post">
<div class="dashboard-pill">
	<div class="dashboard-title">
		Bookings
	</div>
	<button class="Notification"><i class="fa-solid fa-bell"></i></button>
	<button class="Message" id="openChat"><i class="fa-regular fa-comment-dots"></i></button>
	<button class="Log_Out" name="Log_Out"><i class="fa-solid fa-power-off"></i></button>
</div>
<div class="circle1"></div>
<div class="circle2"></div>
<div class="circle3"></div>
<div class="circle4"></div>

<!--<div class="Profile_Pic-circle">
	<img src="pp.jpg" alt="Filled Circle">
</div>-->




<div class="Profile-dropdown">
	<button class="Profile-button" style="background-image: url('<?php echo $res5["Image"]; ?>');">

	</button>
	 <div class="Dropdown-content">
        <!-- Dropdown links -->
        <a href="Profile.php"><i class="fa-solid fa-user"></i>Profile</a>
        <a href="Hotel_Info.php"><i class="fa-solid fa-hotel"></i>Hotel Info</a>
        <a href="Hotel_Registration.php"><i class="fa-regular fa-id-card"></i>Hotel Registration</a>
    </div>
</div>

<div class="Logo-circle">
	<img src="logo.png" alt="Filled Circle">
</div>

<div class="navigation-pill">
	<button class="dashboard-button" name="dashboard-button"><i class="fa-solid fa-table-columns"></i>
		<div class="dashboard-button-title">
			Dashboard
		</div>
		
	</button>
	<button class="Hotel-Room-button" name="Hotel-Room-button"><i class="fa-solid fa-bed"></i>
		<div class="Hotel-Room-button-title">
			Hotel Room
		</div>
		
	</button>

	<button class="Bookings-button" name="Bookings-button"><i class="fa-solid fa-clipboard-list"></i>
		<div class="Bookings-button-title">
			Bookings
		</div>
		
	</button>

	<button class="Room-Service-button" name="Room-Service-button"><i class="fa-solid fa-bell-concierge"></i>
		<div class="Room-Service-button-title">
			Room Service
		</div>
		
	</button>

	<button class="Payments-button" name="Payments-button"><i class="fa-solid fa-money-bill"></i>
		<div class="Payments-button-title">
			Payments
		</div>
		
	</button>

</div>
<div class="selection-rectangle">
    <div class="selected-title"><i class="fa-solid fa-clipboard-list"></i>Bookings</div>
</div>

<div class="rectangle">
	<table class="Bookings-Table" border="1" style="width: 80%;">
		<tr>
			<th style="background-color: #0077C0; color: white;">Name</th>
			<th style="background-color: #0077C0; color: white;">Booking Date</th>
			<th style="background-color: #0077C0; color: white;">Payments</th>
			<th style="background-color: #0077C0; color: white;">Accept</th>
			<th style="background-color: #0077C0; color: white;">Rejects</th>

		</tr>
		<?php
		while ($r = mysqli_fetch_assoc($res)) {?>
		<tr>
			<td style="text-align: center;"><?php echo $r["Name"]; ?></td>
			<td style="text-align: center;"><?php echo $r["Booking_Date"]; ?></td>
			<td style="text-align: center;"><?php echo $r["Payments"]; ?></td>
			<td style="text-align: center;"><button class="AR" name="Accept" value="<?php echo $r["ID"]; ?> ">Accept</button></td>
			<td style="text-align: center;"><button class="AR" name="Reject" value="<?php echo $r["ID"]; ?> ">Reject</button></td>
		</tr>
	<?php } ?>
	<!--<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>-->
	</table>
	
</div>

<footer class="footer">
<div class="About-Us">
	<a href="About_Us.php">  About Us </a><br> 
	<a href="Privacy_Policy.php">Privacy Policy </a><br>
	<a href="Terms_and_Conditions.php">Terms & Conditions </a><br>
</div>

	<div class="Payment-Methods">
	Payment Methods
	<div class="Payment-Methods-logos">
		<i class="fa-brands fa-cc-visa"></i>
		<img class="bkash" src="Bkash.svg" alt="Bkash Logo">
	</div>
    </div>
    <div class="Copyright">
	© 2024 Universus Tourism | All Rights Reserved
    </div>

<div class="Contact">
	Contact Us
	<div class="Contact-logos">
		<i class="fa-brands fa-facebook"></i>
		<i class="fa-regular fa-envelope"></i>
		<i class="fa-solid fa-phone"></i>
	</div>
</div>



</footer>




</form>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/664804079a809f19fb32723e/1hu4kvfjj';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);

})();
Tawk_API.onload = function()
{
	Tawk_API.hideWidget();
};
</script>
<!--End of Tawk.to Script-->
<script type="text/javascript">
document.getElementById('openChat').addEventListener('click', function(){
	Tawk_API.showWidget();
    Tawk_API.maximize();
});
</script>
</body>
</html>