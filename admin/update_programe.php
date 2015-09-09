<?php 
include('connect.php');
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}


$pid= $_GET['pid'];
$dayname= $_POST['dayname'];
$ptime= $_POST['ptime'];
$pname= $_POST['pname'];
$rj_name= $_POST['rj_name'];


$update="UPDATE `program` SET dname='$dayname',slot_time='$ptime',pname='$pname',rj_name='$rj_name' WHERE id='$pid'";
$updateed= mysqli_query($conn,$update) OR die(mysqli_error($conn));

if($updateed){
	$_SESSION['msg']="Updated Successfully!";
}

header("location:manage_program.php");
// exit();
// mysqli_close($conn);

?>