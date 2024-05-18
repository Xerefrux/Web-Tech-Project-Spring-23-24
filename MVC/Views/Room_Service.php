<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/RoomServiceController.php');
require_once('../Models/alldb.php');
if(isset($_POST['Hotel-Room-button']))
{
	header('location:Hotel_Rooms.php');
}
elseif (isset($_POST['Bookings-button'])) 
{
	header('location:Bookings.php');
}
if(isset($_POST['dashboard-button']))
{
	header('location:Dashboard.php');
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

$id = $_SESSION['ID'];

$res5 = getProfilePic($id);


$res = getRoomServicelist();

if(isset($_POST['Send-button']))
{
    $room_no = $_POST['Room_No'];
    $res2 = getRoomServiceRoom($room_no);

    // Check if $res2 is not null
    if($res2 && $res2["Meal_time"] != $_POST['Meal-Time'] || $res2["Appetizer"] != $_POST['appetizer'] || $res2["Main_Dish"] != $_POST['MainDish'] || $res2["Dessert"] != $_POST['dessert'])
    {
        echo "<script>alert('Invalid Input.');</script>";
    }
    else
    {
        deletefromRoomServiceList($room_no);
        header('location:Room_Service.php');
    }
}

}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="MyStyle4.css">
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
		Room Services
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
    <div class="selected-title"><i class="fa-solid fa-bell-concierge"></i></i>Room Services</div>
</div>

<div class="rectangle">
	<div class="rectangle2">
		
	</div>
	<div class="Room-Service-Request-Table" >
		<table border="1" style="width: 100%;">
		<tr>
			<th style="background-color: #0077C0; color: white; text-align: center;">Room No.</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Meal Time</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Appetizer</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Main Dish</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Dessert</th>

		</tr>
		<?php
		   while ($r = mysqli_fetch_assoc($res)) {?>
		<tr>
			<td style="background-color: #FAFAFA; text-align: center;"><?php echo $r["Room_no"]; ?></td>
			<td style="background-color: #FAFAFA; text-align: center;"><?php echo $r["Meal_time"]; ?></td>
			<td style="background-color: #FAFAFA; text-align: center;"><?php echo $r["Appetizer"]; ?></td>
			<td style="background-color: #FAFAFA; text-align: center;"><?php echo $r["Main_Dish"]; ?></td>
			<td style="background-color: #FAFAFA; text-align: center;"><?php echo $r["Dessert"]; ?></td>
		</tr>
		<?php } ?>


		</table>
	</div>
	<div class="Room-Service-Table">
		<table border="1" style="width: 100%;">
		<tr>
			<th style="background-color: #0077C0; color: white; text-align: center;">Room No.</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Meal Time</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Appetizer</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Main Dish</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Dessert</th>
			<th style="background-color: #0077C0; color: white; text-align: center;">Send</th>

		</tr>
		<tr>
			<td>
				<select class="Choice" name="Room_No">
					<option disabled selected>Room No.</option>
					<option value="101">101</option>
					<option value="102">102</option>
					<option value="103">103</option>
					<option value="104">104</option>
					<option value="105">105</option>
					<option value="106">106</option>
					<option value="107">107</option>
					<option value="108">108</option>
					<option value="109">109</option>
					<option value="110">110</option>
				</select>
			</td>
			<td>
				<select class="Choice" name="Meal-Time">
					<option disabled selected>Meal Time</option>
					<option>Breakfast</option>
					<option>Lunch</option>
					<option>Dinner</option>
				</select>
			</td>
			<td>
				<select class="Choice" name="appetizer">
					<option disabled selected>Appetizer</option>
					<option>Bread</option>
					<option>Soup</option>
					<option>Salad</option>
				</select>
			</td>
			<td>
				<select class="Choice" name="MainDish">
					<option disabled selected>Main Dish</option>
					<option>Fried Rice</option>
					<option>Fried Rice with Chicken</option>
					<option>Beef Bowl</option>
					<option>Chicken Bowl</option>
					<option>Ramen</option>
				</select>
			</td>
			<td>
				<select class="Choice" name="dessert">
					<option disabled selected>Dessert</option>
					<option>Pudding</option>
					<option>Cake</option>
					<option>Ice Cream</option>
				</select>
			</td>
			<td>
				<button class="Send-button" name="Send-button">Send</button>
			</td>
		</tr>
		</table>
		
	</div>
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