<?php 
include('connect.php');
session_start();

date_default_timezone_set("Asia/Dhaka"); 
$dateTime = date("Y-m-d h-i-s");
$today=date("Y-m-d");


$name= $_POST['name'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$description= $_POST['description'];


$insert="INSERT INTO `feedback` (name,email,mobile,description,mdate) VALUES('$name','$email','$mobile','$description','$dateTime')";
$insertion= mysqli_query($conn,$insert) OR die(mysqli_error($conn));



$_SESSION['msg']="Request Submitted Successfully!";
header("location:index.php");
// exit();
// mysqli_close($conn);

?>