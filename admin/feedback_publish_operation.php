<?php 
include('connect.php');
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

$fid= $_GET['fid'];

$sql_rj="SELECT * FROM feedback WHERE id='$fid'";
$results_rj= mysqli_query($conn,$sql_rj);
$data_rj= mysqli_fetch_assoc($results_rj);
$currentStatus= $data_rj['status'];

// exit();

if($currentStatus==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE feedback SET status='$status' WHERE id='$fid'";
mysqli_query($conn,$update);

mysqli_close($conn);

header("location:manage_feedback.php");
// exit();


?>