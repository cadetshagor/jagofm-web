<?php 
include('connect.php');

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

session_start();
$dayname= $_POST['dayname'];
$ptime= $_POST['ptime'];
$pname= $_POST['pname'];
$rj_name= $_POST['rj_name'];


$insert="INSERT INTO `program` (dname,pname,rj_name,slot_time) VALUES('$dayname','$pname','$rj_name','$ptime')";
$insertion= mysqli_query($conn,$insert) OR die(mysqli_error($conn));

if($insertion){
	$_SESSION['msg']="Submitted Successfully!";
}

header("location:add_program.php");
// exit();
// mysqli_close($conn);

?>