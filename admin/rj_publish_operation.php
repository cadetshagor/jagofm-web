<?php 
include('connect.php');
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

$rjid= $_GET['rjid'];

$sql_rj="SELECT * FROM rj_info WHERE id='$rjid'";
$results_rj= mysqli_query($conn,$sql_rj);
$data_rj= mysqli_fetch_assoc($results_rj);
$currentStatus= $data_rj['status'];

if($currentStatus==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE rj_info SET status='$status' WHERE id='$rjid'";
mysqli_query($conn,$update);

mysqli_close($conn);
header("location:manage_rj.php");
// exit();


?>