<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/ProfileController.php');
require_once('../Models/alldb.php');

if(isset($_POST['Edit-Profile-button']))
{
	header('location:EditProfile.php');
}

  $id = $_SESSION['ID'];

  $res = Show_Profile($id);
  $profile = mysqli_fetch_assoc($res);
  $res5 = getProfilePic($id);

}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="Profile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
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

		<p>Name: <?php echo $profile["Name"]; ?></p>
		<p>Password: <?php echo $profile["Password"]; ?></p>
		<p>Email: <?php echo $profile["Email"]; ?></p>
		<p>Address: <?php echo $profile["Address"]; ?></p>
	</div>



<button class="Edit-Profile-button" name="Edit-Profile-button">
	Edit Profile
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