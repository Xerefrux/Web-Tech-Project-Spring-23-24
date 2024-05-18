<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/RegisterHotelInfoController.php');
require_once('../Models/alldb.php');
if(isset($_POST['Register-Hotel-Info-button']))
{
	if(empty($_POST['Name']) || empty($_POST['Address']) || empty($_POST['Email']) || empty($_POST['Description']) || empty($_POST['Image']))
	{
		echo "<script>alert('Please fill out all fields.');</script>";
	}
	else
	{
		/*$H_ID = $_POST['Hotel_ID'];*/
		$Name = $_POST['Name'];
		$Address = $_POST['Address'];
		$Email = $_POST['Email'];
		$Description = $_POST['Description'];
		$Image = $_POST['Image'];

		$M_ID = $_SESSION['ID'];

		Set_Register_Hotel_Info($Name, $Address, $Email, $Description, $Image, $M_ID);


		header('location:Hotel_Info.php');
	}
	
}

$id = $_SESSION['ID'];


}


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Hotel_Registration.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">


	



	<div class="Hotel-Info-Text"><u>Register Hotel</u></div>
	<div class="Profile-Info">
		<!--<p>ID: <input type="text" name="ID"></p>-->
		<p>Name: <input type="text" name="Name"></p>
		<p>Address: <input type="text" name="Address"></p>
		<p>Email: <input type="text" name= "Email"></p>
		<p>Description: <input type="text" name="Description"></p>
		<p>Image: <input type="text" name="Image"></p>
	</div>




<button class="Register-Hotel-Info-button" name="Register-Hotel-Info-button">
	Register Hotel
</button>


<div class="rectangle5"></div>

<div class="Hotel-Rectangle"></div>

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

</body>
</html>