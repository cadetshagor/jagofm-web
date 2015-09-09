<?php 
include('connect.php');
session_start();

if($_SESSION['isLogin'] !=1){
    header("location:index.php");
}

$imgId= $_GET['imgId'];

$sql_rj="SELECT * FROM gallery WHERE id='$imgId'";
$results_rj= mysqli_query($conn,$sql_rj);
$data_rj= mysqli_fetch_assoc($results_rj);
$currentStatus= $data_rj['status'];

if($currentStatus==1){
	$status=0;
}else{
	$status=1;
}

$update="UPDATE gallery SET status='$status' WHERE id='$imgId'";
mysqli_query($conn,$update);

mysqli_close($conn);
header("location:manage_gallery.php");
// exit();


?>