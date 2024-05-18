<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/UpdateHotelInfoController.php');
require_once('../Models/alldb.php');
if(isset($_POST['Save-Hotel-Info-button']))
{
	if(empty($_POST['Name']) || empty($_POST['Address']) || empty($_POST['Email']) || empty($_POST['Description']))
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
		$M_ID = $_SESSION['ID'];

		Edit_Hotel_Info($Name, $Address, $Email, $Description, $M_ID);


		header('location:Hotel_Info.php');
	}
	
}

$id = $_SESSION['ID'];

$res5 = getHotelPic($id);
}


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="EditHotel_Info.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<script type="text/javascript"></script>
<body>
	<form method="post">

	<div class="Hotel-Pic-background">

		
	</div>
	<div class="Hotel-Pic-circle">
		<img src="<?php echo $res5["Image"]; ?>" alt="Filled Circle">
	</div>


	<div class="rectangle1"></div>
	<div class="Hotel-Info-Text"><u>Hotel Information</u></div>
	<div class="Profile-Info">
		<!--<p>ID: <input type="text" name="ID"></p>-->
		<p>Name: <input type="text" name="Name"></p>
		<p>Address: <input type="text" name="Address"></p>
		<p>Email: <input type="text" name= "Email"></p>
		<p>Description: <input type="text" name="Description"></p>
	</div>


<div class="Gallery-text">
		<u>Gallery</u>
	</div>

<button class="Save-Hotel-Info-button" name="Save-Hotel-Info-button">
	Save Hotel Info
</button>


<div class="slideshow_container">

	<div class="Slides fade">
		<img src="Hr1.jpg" style="width:100%">
	</div>
	<div class="Slides fade">
		<img src="Hr2.jpg" style="width:100%">
	</div>
	<div class="Slides fade">
		<img src="Hr3.jpg" style="width:100%">
	</div>
	<div class="Slides fade">
		<img src="Hr5.jpg" style="width:100%">
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
	
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
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("Slides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
</script>
</body>
</html>