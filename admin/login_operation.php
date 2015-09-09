<?php 
session_start();



$username=$_POST['username'];
$password=$_POST['password'];


if($username=="webpers" && $password=='123456'){
	
	$_SESSION['isLogin']=1;
	// exit();

	header("location: welcome.php");
}else{
	$_SESSION['msg_adm']="Username or Password is incorrect!!";
	header("location: index.php");
}
?>