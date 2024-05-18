<?php
session_start();
if(empty($_SESSION['ID']))
{
	header('location:log.php');
}
else
{
require_once('../Controllers/HotelRoomsController.php');
require_once('../Models/alldb.php');
if(isset($_POST['dashboard-button']))
{
	header('location:Dashboard.php');
}
elseif (isset($_POST['Bookings-button'])) 
{
	header('location:Bookings.php');
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

$id = $_SESSION['ID'];

$res5 = getProfilePic($id);

}


?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="TC.css">
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
		Terms & Conditions
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





<div class="rectangle">
	<div class="TC">
		<p style="text-align: center; font-size: 50px;"><u><b>Terms and Conditions</b></u></p>
		<p>
<p style="text-align: center;"><b>Welcome to Universus Tourism!</b></p><br>

These terms and conditions outline the rules and regulations for the use of Universus Tourism’s Website.<br>


By accessing this website we assume you accept these terms and conditions. Do not continue to use Universus Tourism if you do not agree to take all of the terms and conditions stated on this page.<br>


<b>1. Definitions</b>

<b>User:</b> Any individual accessing our website, including Tourists, Travel Agents, Hotel Service Providers, and Tour Guides.<br>

<b>Service Providers:</b> Includes Travel Agents, Hotel Service Providers, and Tour Guides offering services through our website.<br>

<b>Content:</b> All information, text, graphics, photos, features, and other materials provided on our website.<br>


<b>2. User Categories and Features:</b> Each user category has specific features and responsibilities as outlined in our Requirement Analysis. Users must comply with their respective roles and use the website’s features ethically and legally.<br>


<b>3. Privacy Policy:</b> Your privacy is important to us. It is Universus Tourism’s policy to respect your privacy regarding any information we may collect while operating our website. Please refer to our Privacy Policy for more information.<br>


<b>4. Payment and Cancellation: </b> Users can book and pay for travel arrangements online using secure payment methods. Cancellations are subject to our cancellation policy, which is detailed in the booking process.<br>


<b>5. Intellectual Property Rights:</b> Other than the content you own, under these Terms, Universus Tourism and/or its licensors own all the intellectual property rights and materials contained in this Website.<br>


<b>6. Restrictions You are specifically restricted from:</b><br>


<b>a)</b> Publishing any Website material in any other media.<br>

<b>b)</b> Selling, sublicensing and/or otherwise commercializing any Website material.<br>

<b>c)</b> Publicly performing and/or showing any Website material.<br>

<b>d)</b> Using this Website in any way that is or may be damaging to this Website.<br>

<b>e)</b> Using this Website in any way that impacts user access to this Website.<br>


<b>7. Your Content:</b> In these Website Standard Terms and Conditions, “Your Content” shall mean any audio, video text, images or other material you choose to display on this Website. Your Content must be your own and must not be invading any third-party’s rights.<br>


<b>8. No warranties:</b> This Website is provided “as is,” with all faults, and Universus Tourism express no representations or warranties, of any kind related to this Website or the materials contained on this Website.<br>


<b>9. Limitation of liability:</b> In no event shall Universus Tourism, nor any of its officers, directors and employees, be held liable for anything arising out of or in any way connected with your use of this Website.<br>


<b>10. Indemnification:</b> You hereby indemnify to the fullest extent Universus Tourism from and against any and/or all liabilities, costs, demands, causes of action, damages and expenses arising in any way related to your breach of any of the provisions of these Terms.<br>


<b>11. Severability:</b> If any provision of these Terms is found to be invalid under any applicable law, such provisions shall be deleted without affecting the remaining provisions herein.<br>


<b>12. Variation of Terms:</b> Universus Tourism is permitted to revise these terms at any time as it sees fit, and by using this Website you are expected to review these terms on a regular basis.<br>


<b>13. Assignment:</b> Universus Tourism is allowed to assign, transfer, and subcontract its rights and/or obligations under these Terms without any notification. However, you are not allowed to assign, transfer, or subcontract any of your rights and/or obligations under these Terms.<br>


<b>14. Entire Agreement:</b> These Terms constitute the entire agreement between Universus Tourism and you in relation to your use of this Website, and supersede all prior agreements and understandings.<br>


<b>15. Governing Law & Jurisdiction</b> These Terms will be governed by and interpreted in accordance with the laws of the People's Republic of Bangladesh, and you submit to the non-exclusive jurisdiction of the state and federal courts located in People's Republic of Bangladesh for the resolution of any disputes.<br>
</p>
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