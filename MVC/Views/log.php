
<?php



session_start();
if(!empty($_SESSION['ID']))
{
	header("location: Dashboard.php");
}
else
{
require_once('../Controllers/logCheckController.php');

if(isset($_POST['log'])){
	$id = $_POST['id'];
	$pass = $_POST['pass'];
	
	$status = loginUser($id,$pass);
	if($status){
		echo "success";
	}
	else{
		echo "Failed";
		echo $_SESSION['mess'];
	}

}
}



?>
<!DOCTYPE html>
<html>
<head>
	
	<title></title>
</head>
<body>
<form method="POST">
ID: <input type="text" name="id"><br>
Pass: <input type="text" name="pass"><br>

<button name="log" type="submit">LogIn</button>

</form>

</body>
</html>