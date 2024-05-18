<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/UpdateProfileController.php');
require_once('../Models/alldb.php');
if(isset($_POST['Save-Profile-button']))
{
	if(empty($_POST['Name']) || empty($_POST['Password']) || empty($_POST['Email']) || empty($_POST['Address']))
	{
		echo "<script>alert('Please fill out all fields.');</script>";
	}
	else
	{
		$id = $_SESSION['ID'];
		$Name = $_POST['Name'];
		$Password = $_POST['Password'];
		$Email = $_POST['Email'];
		$Address = $_POST['Address'];

		Edit_Profile($id, $Name, $Password, $Email, $Address);





		header('location:Profile.php');
	}
	
}

$M_id = $_SESSION['ID'];

$res5 = getProfilePic($M_id );


}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="EditProfile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<script type="text/javascript"></script>
<body>
	<form method="post">

	<div class="Profile-Pic-background">

		
	</div>
	<div class="Profile-Pic-circle">
		<img src="<?php echo $res5["Image"]; ?>" alt="Filled Circle">
	</div>


	<div class="rectangle1"></div>
	<div class="Profile-Info-Text"><u>Profile Information</u></div>
	<div class="Profile-Info">
		<!--<p>ID: <input type="text" name="ID"></p>-->
		<p>Name: <input type="text" name="Name"></p>
		<p>Password: <input type="text" name="Password"></p>
		<p>Email: <input type="text" name= "Email"></p>
		<p>Address: <input type="text" name="Address"></p>
	</div>


<button class="Save-Profile-button" name="Save-Profile-button">
	Save Profile
</button>




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