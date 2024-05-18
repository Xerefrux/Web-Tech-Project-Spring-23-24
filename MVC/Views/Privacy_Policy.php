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
<link rel="stylesheet" href="Privacy_Policy.css">
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
		Privacy Policy
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
	<div class="Privacy_Policy">
		<p style="text-align: center; font-size: 50px;"><u><b>Privacy Policy</b></u></p>
		<p>
At Universus Tourism, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Universus Tourism and how we use it.<br>

<b>1. General Data Protection Regulation (GDPR):</b> We are a Data Controller of your information.<br>

Universus Tourism legal basis for collecting and using the personal information described in this Privacy Policy depends on the Personal Information we collect and the specific context in which we collect the information:<br>

<b>a)</b> Universus Tourism needs to perform a contract with you.<br>
<b>b)</b> You have given Universus Tourism permission to do so.<br>
<b>c)</b> Processing your personal information is in Universus Tourism legitimate interests.<br>
<b>d)</b> Universus Tourism needs to comply with the law.<br>

Universus Tourism will retain your personal information only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your information to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our policies.<br>

<b>2. Consent:</b> By using our website, you hereby consent to our Privacy Policy and agree to its terms.<br>

<b>3. Information:</b> we collect The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.<br>

If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.<br>

When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.<br>

<b>4. How we use your information:</b> We use the information we collect in various ways, including to:<br>

<b>a)</b> Provide, operate, and maintain our website.<br>
<b>b)</b> Improve, personalize, and expand our website.<br>
<b>c)</b> Understand and analyze how you use our website.<br>
<b>d)</b> Develop new products, services, features, and functionality.<br>
<b>e)</b> Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes.<br>
<b>f)</b> Send you emails.<br>
<b>g)</b> Find and prevent fraud.<br>

<b>5. Log Files:</b> Universus Tourism follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services’ analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable.<br>

<b>6. Cookies and Web Beacons:</b> Like any other website, Universus Tourism uses ‘cookies’. These cookies are used to store information including visitors’ preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users’ experience by customizing our web page content based on visitors’ browser type and/or other information.<br>

<b>7. Third Party Privacy Policies:</b> Universus Tourism’s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information.<br>

<b>8. CCPA Privacy Rights (Do Not Sell My Personal Information): </b>Under the CCPA, among other rights, California consumers have the right to:<br>

<b>a)</b> Request that a business that collects a consumer’s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.<br>
<b>b)</b> Request that a business delete any personal data about the consumer that a business has collected.<br>
<b>c)</b> Request that a business that sells a consumer’s personal data, not sell the consumer’s personal data.<br>

<b>9. GDPR Data Protection Rights:</b> We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:<br>

<b>a)</b> The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.<br>
<b>b)</b> The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.<br>
<b>c)</b> The right to erasure – You have the right to request that we erase your personal data, under certain conditions.<br>
<b>d)</b> The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.<br>
<b>e)</b> The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.<br>
<b>f)</b> The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.<br>

<b>10. Children’s Information:</b> Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.<br>

Universus Tourism does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.<br>

This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Universus Tourism. This policy is not applicable to any information collected offline or via channels other than this website.<br>
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