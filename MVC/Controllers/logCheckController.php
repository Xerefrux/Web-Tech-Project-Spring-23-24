<?php
require_once('../Models/alldb.php');



function loginUser($id, $pass){
    
    
    $status = loginAuth($id, $pass);

    if($status){
    	$row = mysqli_fetch_assoc($status);
    	$_SESSION['ID'] = $row['ID'];
    	$_SESSION['Name'] = $row['Name'];
        header("location:../Views/Dashboard.php");
        exit(); 
    } else {
        $_SESSION['mess'] = "Your ID & Pass is invalid";
        header("location:../Views/log.php");
        exit(); 
    }
}



    

?>